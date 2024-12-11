<div class="min-h-screen bg-gray-50">
    <!-- Hero Section with Background Image -->
    <div class="relative bg-blue-600 text-white py-32">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800 opacity-90"></div>
        <div class="container mx-auto px-4 relative">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Welcome to DevBlog</h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-2xl mb-8">Exploring the world of web development, sharing
                insights, and helping developers build better applications.</p>
            <a href="#featured"
                class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors inline-block">
                Start Reading
            </a>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                <svg class="w-12 h-12 mx-auto mb-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
                <h3 class="font-semibold">Coding</h3>
                <p class="text-gray-600 text-sm">20 Articles</p>
            </a>
            <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                <svg class="w-12 h-12 mx-auto mb-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <h3 class="font-semibold">Design</h3>
                <p class="text-gray-600 text-sm">15 Articles</p>
            </a>
            <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                <svg class="w-12 h-12 mx-auto mb-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <h3 class="font-semibold">DevOps</h3>
                <p class="text-gray-600 text-sm">12 Articles</p>
            </a>
            <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                <svg class="w-12 h-12 mx-auto mb-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
                <h3 class="font-semibold">Tools</h3>
                <p class="text-gray-600 text-sm">18 Articles</p>
            </a>
        </div>
    </div>

    <!-- Featured Posts -->
    <div id="featured" class="container mx-auto px-4 py-12">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-semibold">Featured Posts</h2>
            <a href="#" class="text-blue-600 hover:text-blue-800">View All Posts →</a>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Featured Post Cards (keeping your existing cards) -->
            @foreach(range(1, 3) as $index)
            <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-xl transition-shadow">
                <div class="relative">
                    <img src="https://picsum.photos/800/{{400 + $index}}" alt="Post thumbnail"
                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute top-4 right-4 bg-blue-600 text-white text-sm px-3 py-1 rounded-full">
                        Featured
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{$index}}" alt="Author"
                            class="w-10 h-10 rounded-full">
                        <div class="ml-3">
                            <p class="font-semibold">John Doe</p>
                            <p class="text-sm text-gray-500">March {{15 - $index}}, 2024</p>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 group-hover:text-blue-600 transition-colors">Getting Started
                        with Laravel and Livewire</h3>
                    <p class="text-gray-600 mb-4">Learn how to build modern, reactive applications using Laravel and
                        Livewire...</p>
                    <div class="flex items-center justify-between">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Read More →</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <span class="mr-4">
                                <svg class="w-5 h-5 inline-block mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                1.2k
                            </span>
                            <span>
                                <svg class="w-5 h-5 inline-block mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                                8
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Latest Posts with Tabs -->
    <div class="container mx-auto px-4 py-12">
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex border-b mb-6">
                <button wire:click="setTab('latest')" 
                    class="px-6 py-3 {{ $activeTab === 'latest' ? 'text-blue-600 border-b-2 border-blue-600 font-semibold' : 'text-gray-500 hover:text-gray-700' }}">
                    Latest
                </button>
                <button wire:click="setTab('popular')"
                    class="px-6 py-3 {{ $activeTab === 'popular' ? 'text-blue-600 border-b-2 border-blue-600 font-semibold' : 'text-gray-500 hover:text-gray-700' }}">
                    Popular
                </button>
                <button wire:click="setTab('trending')"
                    class="px-6 py-3 {{ $activeTab === 'trending' ? 'text-blue-600 border-b-2 border-blue-600 font-semibold' : 'text-gray-500 hover:text-gray-700' }}">
                    Trending
                </button>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                @foreach(range(1, 4) as $index)
                <div class="flex gap-6 items-start group">
                    <img src="https://picsum.photos/200/{{200 + $index}}" alt="Post thumbnail"
                        class="w-32 h-32 rounded-lg object-cover group-hover:scale-105 transition-transform duration-300">
                    <div>
                        <span class="text-blue-600 text-sm font-medium">Laravel</span>
                        <h3 class="text-xl font-semibold mb-2 group-hover:text-blue-600 transition-colors">
                            {{ $activeTab === 'popular' ? 'Popular: ' : ($activeTab === 'trending' ? 'Trending: ' : '') }}
                            Understanding PHP 8.3 Features
                        </h3>
                        <p class="text-gray-600 mb-3">Explore the latest features and improvements in PHP 8.3...</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{$index+10}}" alt="Author"
                                class="w-6 h-6 rounded-full mr-2">
                            <span>By John Doe</span>
                            <span class="mx-2">•</span>
                            <span>5 min read</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold mb-4">Never Miss an Update!</h2>
            <p class="mb-8 max-w-2xl mx-auto text-blue-100">Join our newsletter and get weekly updates on the latest
                blog posts, tutorials, and resources.</p>
            <form wire:submit.prevent="subscribe" class="max-w-md mx-auto">
                <div class="flex gap-4">
                    <input wire:model="email" type="email" placeholder="Enter your email"
                        class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <button type="submit"
                        class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                        Subscribe
                    </button>
                </div>
                @error('email') <span class="text-red-200 text-sm mt-2 block">{{ $message }}</span> @enderror
                @if($message) <span class="text-green-200 text-sm mt-2 block">{{ $message }}</span> @endif
            </form>
        </div>
    </div>

    <!-- Topics Cloud -->
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-semibold mb-8 text-center">Popular Topics</h2>
        <div class="flex flex-wrap justify-center gap-4">
            @foreach(['Laravel', 'PHP', 'JavaScript', 'Vue.js', 'React', 'CSS', 'Tailwind', 'DevOps', 'Docker', 'AWS',
            'Testing', 'Security'] as $topic)
            <a href="#"
                class="px-4 py-2 bg-white rounded-full shadow-sm hover:shadow-md transition-shadow text-gray-700 hover:text-blue-600">
                #{{ $topic }}
            </a>
            @endforeach
        </div>
    </div>
</div>