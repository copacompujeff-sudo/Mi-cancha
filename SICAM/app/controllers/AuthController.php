<?php

declare(strict_types=1);

class AuthController
{
    public function showLogin(): void { view('auth/login'); }
    public function login(): void
    {
        if (!csrf_validate($_POST['csrf_token'] ?? null)) { http_response_code(419); exit('CSRF inválido'); }
        $user = User::findByUsername(trim($_POST['username'] ?? ''));
        if (!$user || !password_verify($_POST['password'] ?? '', $user['password'])) { $_SESSION['error'] = 'Credenciales inválidas'; redirect('/SICAM/public/'); }
        $_SESSION['user'] = ['id' => $user['id'], 'name' => $user['full_name'], 'role' => $user['role']];
        redirect('/SICAM/public/dashboard');
    }
    public function logout(): void { session_destroy(); redirect('/SICAM/public/'); }
}
