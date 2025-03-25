<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Message -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-lg text-gray-700">Welcome back, {{ Auth::user()->name }}!</p>
                    <p class="text-sm text-gray-500">You're logged in and ready to explore.</p>
                </div>
            </div>

            <!-- Posts Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Latest Posts</h3>

                    <!-- Post List -->
                    <div class="space-y-6">
                        @forelse ($posts as $post)
                            <div class="p-6 bg-gray-50 rounded-lg shadow-sm">
                                <h4 class="text-lg font-semibold text-gray-800">{{ $post->title }}</h4>
                                <p class="mt-2 text-sm text-gray-600">{{ Str::limit($post->content, 150) }}</p>
                                <div class="mt-4 flex items-center justify-between">
                                    <span class="text-sm text-gray-500">Posted by {{ $post->user->name }}</span>
                                    <a href="{{ route('posts.show', $post->id) }}" class="text-indigo-600 hover:text-indigo-500 text-sm">Read More →</a>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-600">No posts available.</p>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>