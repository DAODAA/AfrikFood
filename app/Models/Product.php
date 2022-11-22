<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id']- int- contains the produt primary ey (id)
     * $this->attributes['name']-string- contains the product name
     * $this->attributes ['description]-text- contains the product description
     * $this->attributes ['image']-string- contains the product image
     * $this->attributes['price']-integer- contains the product price
     * $this->attributes['created_at']-timestamp-contains the product date of creation
     * $this->attributes['updated_at]- timestamp- contains the product date of update
     */

    public static function validate($request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'description'=>'required',
            'price'=>'required|numeric|gt:0',
            'image'=>'image',
        ]);
    }

    public static function sumPricesByQuantities($products, $productsInSession)
    {
        $total=0;
        foreach ($products as $product) {
            $total=($product->getPrice()*$productsInSession[$product->getId()]);
        }
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        return $this->attributes['id']=$id;
    }

    public function getName()
    {
        // return strtoupper($this->attributes['name']);
        return ($this->attributes['name']);
    }

    public function setName($name)
    {
        return $this->attributes['name']=$name;
    }
    public function getDescription()
    {
        return $this->attributes['description'];
    }

    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }

    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

    public function getPrice()
    {
        return $this->attributes['price'];
    }

    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}
