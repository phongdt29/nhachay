<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SunoService
{
    protected $baseUrl;

    public function __construct()
    {
        // Đặt URL API trong file .env với key SUNO_API_URL hoặc dùng mặc định localhost:3000
        $this->baseUrl = env('SUNO_API_URL', 'http://localhost:3000');
    }

    /**
     * Gửi yêu cầu tạo nhạc mới
     */
    public function generateMusic(string $prompt, bool $instrumental = false)
    {
        // Endpoint tùy thuộc vào tài liệu API Suno bạn đang dùng (ví dụ: /api/generate)
        $response = Http::baseUrl($this->baseUrl)->post('/api/generate', [
            'prompt' => $prompt,
            'make_instrumental' => $instrumental,
            'wait_audio' => false, // false để nhận response ngay mà không chờ render xong
        ]);

        return $response->json();
    }

    /**
     * Lấy danh sách nhạc đã tạo hoặc kiểm tra trạng thái
     */
    public function getMusicList()
    {
        $response = Http::baseUrl($this->baseUrl)->get('/api/get');
        
        return $response->json();
    }
}