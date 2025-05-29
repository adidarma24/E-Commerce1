<?php

namespace App\Helpers;

use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class CartManagement{

    //add item to cart
    static public function addItemToCart($product_id) {
        $cart_items = self::getCartItemsFromCookie();

        $existing_item = null;

        foreach ($cart_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                $existing_item = $key;
                break;
            }
        }
        if ($existing_item !== null){
            $cart_items[$existing_item]['quantity']++;
            $cart_items[$existing_item]['total_amount'] = $cart_items[$existing_item]['quantity'] * $cart_items[$existing_item]['unit_amount'];
        } else {
            $product = Product::where('id', $product_id)->first([
                'id',
                'name',
                'images',
                'price', 
            ]);
            if ($product) {
                $images = is_array($product->images) ? $product->images : json_decode($product->images, true);
                $cart_items[] = [
                    'product_id' => $product_id,
                    'name' => $product->name,
                    'images' => isset($images[0]) ? $images[0] : null,
                    'quantity' => 1,
                    'unit_amount' => $product->price,
                    'total_amount' => $product->price
                ];
            }
        }
        self::addCartItemToCookie($cart_items);
        return count($cart_items);
    }


    //remove item from cart
    static public function romoveCartItem($product_id) {
        $cart_items = self::getCartItemsFromCookie();

        foreach ($cart_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                unset($cart_items[$key]);
                break;
            }
        }

        self::addCartItemToCookie ($cart_items); // Re-index the array
        return $cart_items;
    }

    //add cart items to cookie
    static public function addCartItemToCookie($cart_items)
    {
        Cookie::queue('cart_items', json_encode($cart_items), 60 * 24 * 30); // Store for 30 days
    }

    //clean cart item from cookie
    static public function cleanCartItem()
    {
        Cookie::queue(Cookie::forget('cart_items'));
    }

    //get all cart items from cookie
    static public function getCartItemsFromCookie()
    {
        $cart_items = json_decode(Cookie::get('cart_items'), true);
        if (!$cart_items) {
            $cart_items = [];
        }
        return $cart_items;
    }

    //increment item quantity
    static public function incrementQuantityTOCartItem($product_id)
    {
        $cart_items = self::getCartItemsFromCookie();

        foreach ($cart_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                $cart_items[$key]['quantity']++;
                $cart_items[$key]['total_amount'] = $cart_items[$key]['quantity'] * $cart_items[$key]['unit_amount'];
                break;
            }
        }

        self::addCartItemToCookie($cart_items);
        return $cart_items;
    }

    //decrement item quantity
    static public function decrementQuantityTOCartItem($product_id)
    {
        $cart_items = self::getCartItemsFromCookie();

        foreach ($cart_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                if ($item['quantity'] > 1) {
                    $cart_items[$key]['quantity']--;
                    $cart_items[$key]['total_amount'] = $cart_items[$key]['quantity'] * $cart_items[$key]['unit_amount'];
                } 
                break;
            }
        }

        self::addCartItemToCookie($cart_items);
        return $cart_items;
    }

    //calculate grand total
    static public function calculateGrandTotal($item)
    {
       return array_sum(array_column($item, 'total_amount'));
    }
}