<aside class="w-64 bg-white border-r shadow-sm px-6 py-8 flex flex-col min-h-screen">
  <!-- Navigation -->
  <nav class="space-y-4">
    <a href="{{ route('siswa.index') }}"
       class="flex items-center gap-3 px-4 py-2 font-semibold text-sm rounded-lg transition
       {{ request()->routeIs('siswa.index') ? 'bg-blue-100 text-blue-800' : 'hover:bg-gray-100 text-gray-700' }}">
      <i class="fas fa-home text-base"></i> Home
    </a>

    <a href="{{ route('siswa.absensi') }}"
       class="flex items-center gap-3 px-4 py-2 font-semibold text-sm rounded-lg transition
        {{ request()->routeIs('siswa.absensi') ? 'bg-blue-100 text-blue-800' : 'hover:bg-gray-100 text-gray-700' }}">
      <i class="fas fa-camera text-base"></i> Absensi
    </a>

    <a href="{{ route('siswa.kehadiran') }}"
       class="flex items-center gap-3 px-4 py-2 font-semibold text-sm rounded-lg transition
       {{ request()->routeIs('siswa.kehadiran') ? 'bg-blue-100 text-blue-800' : 'hover:bg-gray-100 text-gray-700' }}">
      <i class="fas fa-calendar-alt text-base"></i> Kehadiran
    </a>
  </nav>

  <!-- Bottom Section -->
  <div class="mt-auto">
    <!-- Additional Links -->
    <nav class="space-y-3 mt-8 pt-6 border-t">
      <a href="#" class="flex items-center gap-3 text-sm text-gray-600 hover:text-blue-600 transition">
        <i class="fas fa-cog"></i> Settings
      </a>
      <a href="#" class="flex items-center gap-3 text-sm text-gray-600 hover:text-blue-600 transition">
        <i class="fas fa-question-circle"></i> Help & Feedback
      </a>
    </nav>

    <!-- User Info -->
    <div class="text-center mt-6">
      <img src="https://storage.googleapis.com/a1aa/image/68064978-1a8c-4177-3d0e-e544a9b7f916.jpg" class="w-24 h-24 rounded-full mx-auto mb-3 object-cover" alt="User Profile" />
      <h3 class="font-semibold text-lg">Emma Smith</h3>
      <p class="text-sm text-gray-500">NISN: 123456</p>
      <div class="flex justify-center gap-2 mt-4">
        <button class="bg-gray-100 text-sm font-medium px-4 py-1.5 rounded hover:bg-gray-200 transition">View</button>
        <a href="{{ route('siswa.edit', 1) }}" class="bg-blue-100 text-sm font-medium px-4 py-1.5 rounded hover:bg-blue-200 transition">Edit</a>
      </div>
    </div>

    <!-- Logout Button -->
    <form method="POST" action="{{ route('logout') }}" class="mt-6">
      @csrf
      <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-medium text-sm px-4 py-2 rounded transition">
        Logout
      </button>
    </form>
  </div>
</aside>
