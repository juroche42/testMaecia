<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/users",
     *     summary="Get all users",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/User"))
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Server error"
     *     )
     * )
     */
    public function index()
    {
        $users = User::with('services:name')
            ->select(['id','prenom', 'nom', 'poste'])
            ->get();
        return response()->json($users);
    }
}
