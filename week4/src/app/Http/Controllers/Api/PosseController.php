<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Posse;

class PosseController extends Controller
{
    // インターンをやっている人を全件取得する
    public function index(Request $request)
    {
    $posses = Posse::all();
    return response()->json(['data' => $posses]);
    }

    // 特定のインターンをやっている人を全件取得する
    public function show(Request $request, $intern)
    {
        $generation = $request->generation;
        $posses = Posse::where('intern', $intern)->where('generation', $generation)->get();
        return response()->json(['data' => $posses]);
    }

    // 特定の期生がやっているインターンを全件取得する
    public function showByGeneration()
    {

    }

    // 特定のインターンをやっている人を新規登録する
    public function store(Request $request)
    {
    $posse = new Posse();
    $posse->name = $request->name;
    $posse->generation = $request->generation;
    $posse->intern = $request->intern;
    $posse->save();

    return response()->json(['data' => $posse], 201);
    }

    // [余力がある人向け]特定のインターンをやっている人を更新する
    public function update()
    {

    }

    // [余力がある人向け]特定のインターンをやっている人を削除する
    public function destroy()
    {

    }
}
