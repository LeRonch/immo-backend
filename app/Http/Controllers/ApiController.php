<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * @OA\Get(
     *      path="/property/all",
     *      operationId="getAllPropertie",
     *      tags={"Props"},
     *      summary="Get List Of Properties",
     *      description="Returns all properties.",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function getAllProperties(){
        return serviceApi('property');
    }

    /**
     * @OA\Get(
     *      path="/property/detail/{id}",
     *      operationId="getOneById",
     *      tags={"Props"},
     *      summary="Get one property",
     *      description="Get one property.",
     *  *@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     * @OA\Response(
     *  response=403,
     *  description="Forbidden"
     *  ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function getOneById($id){
        $endpoint="property/detail/$id";
        return serviceApi($endpoint);
    }

    /**
     * @OA\Post(
     *     path="/property/post",
     *     summary="Adds a new property",
     *     tags={"Props"},
     *     operationId="postProperty",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="title",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="description",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="size",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="floor",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="image",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="room",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="price",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="address",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="zipcode",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="city",
     *                     type="string",
     *                 ),
     *             )
     *         )
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     * @OA\Response(
     *  response=403,
     *  description="Forbidden"
     *  ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     * )
     */  
    public function postProperty(){
        $endpoint="property/post";
        return serviceApi($endpoint);
    }


     /**
     * @OA\Delete(
     *     path="/property/delete/{id}",
     *     description="delete a single property based on the ID supplied",
     *     summary="Delete a single property",
     *     operationId="deleteProperty",
     *     tags={"Props"},
     *     @OA\Parameter(
     *         description="ID of property to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(
     *             format="int64",
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="property deleted"
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error",
     *         @OA\Schema(ref="#/components/schemas/ErrorModel")
     *     )
     * )
     */
  
    public function deleteProperty($id){
        $endpoint="property/delete/$id";
        return serviceApi($endpoint);
    }
}