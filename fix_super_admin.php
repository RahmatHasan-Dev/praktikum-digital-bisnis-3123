<?php
/**
 * Script untuk memperbaiki akun Super Admin dan menambah akun Organizer
 * Jalankan langsung: php fix_super_admin.php
 */

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$kernel->handle(Illuminate\Http\Request::capture());

use App\Models\User;
use Illuminate\Support\Facades\Hash;

echo "=== FIX AKUN SUPER ADMIN & ORGANIZER ===\n\n";

// 1. Super Admin
$admin = User::where('email', 'admin@amikom.ac.id')->first();
if ($admin) {
    $admin->update([
        'name' => 'Super Admin Amikom',
        'role' => 'admin',
        'admin_level' => 'super_admin',
        'is_approved' => true,
        'password' => Hash::make('password'),
    ]);
    echo "OK: admin@amikom.ac.id / password (super_admin)\n";
} else {
    User::create([
        'name' => 'Super Admin Amikom',
        'email' => 'admin@amikom.ac.id',
        'password' => Hash::make('password'),
        'role' => 'admin',
        'admin_level' => 'super_admin',
        'is_approved' => true,
    ]);
    echo "OK (baru): admin@amikom.ac.id / password\n";
}

// 2. Organizer
$org = User::where('email', 'organizer@test.com')->first();
if (!$org) {
    User::create([
        'name' => 'Organizer Amikom',
        'email' => 'organizer@test.com',
        'password' => Hash::make('password'),
        'role' => 'organizer',
        'is_approved' => true,
    ]);
    echo "OK (baru): organizer@test.com / password\n";
} else {
    echo "OK (ada): organizer@test.com / password\n";
}

// 3. User test
$userTest = User::where('email', 'user@test.com')->first();
if (!$userTest) {
    User::create([
        'name' => 'User Biasa',
        'email' => 'user@test.com',
        'password' => Hash::make('password'),
        'role' => 'user',
        'is_approved' => true,
    ]);
    echo "OK (baru): user@test.com / password\n";
} else {
    echo "OK (ada): user@test.com / password\n";
}

echo "\n=== DAFTAR AKUN ===\n";
foreach (User::all() as $u) {
    $level = $u->admin_level ?? '-';
    echo "- {$u->email} role={$u->role} admin_level={$level} approved=" . ($u->is_approved ? 'Yes' : 'No') . "\n";
}

echo "\n=== SELESAI ===\n";
echo "Login Super Admin: admin@amikom.ac.id / password\n";
echo "Login Organizer:   organizer@test.com / password\n";
echo "Login User:        user@test.com / password\n";