<?php

namespace App\Http\Controllers;

use App\Services\SunoService;
use Illuminate\Http\Request;

class SunoController extends Controller
{
    protected $sunoService;

    public function __construct(SunoService $sunoService)
    {
        $this->sunoService = $sunoService;
    }

    public function generate(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'prompt' => 'required|string|max:1000',
            'instrumental' => 'boolean',
        ]);

        try {
            $prompt = $request->input('prompt');
            $instrumental = $request->boolean('instrumental', false);

            $result = $this->sunoService->generateMusic($prompt, $instrumental);

            return response()->json([
                'success' => true,
                'data' => $result
            ]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}