<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="relative bg-blue-600 text-white py-24">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800 opacity-90"></div>
        <div class="container mx-auto px-4 relative">
            <h1 class="text-5xl font-bold mb-6">About Me</h1>
            <p class="text-xl text-blue-100 max-w-2xl">A passionate developer sharing insights and experiences in web development, design, and technology.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Profile Image -->
            <div class="relative">
                <img src="https://picsum.photos/600/600" alt="Profile" class="rounded-lg shadow-lg">
                <div class="absolute -bottom-6 -right-6 bg-blue-600 text-white p-4 rounded-lg">
                    <p class="font-semibold">10+ Years Experience</p>
                </div>
            </div>

            <!-- About Content -->
            <div>
                <h2 class="text-3xl font-bold mb-6">Who Am I?</h2>
                <p class="text-gray-600 mb-6">
                    I'm a full-stack developer with a passion for creating beautiful, functional, and user-friendly websites. 
                    With over 10 years of experience in web development, I've worked with various technologies and frameworks.
                </p>
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h3 class="font-semibold text-lg mb-2">Frontend</h3>
                        <p class="text-gray-600">React, Vue, Angular</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h3 class="font-semibold text-lg mb-2">Backend</h3>
                        <p class="text-gray-600">Laravel, Node.js, Python</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="mt-24">
            <h2 class="text-3xl font-bold mb-12 text-center">My Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @foreach([
                    ['name' => 'Web Development', 'percentage' => 95],
                    ['name' => 'UI/UX Design', 'percentage' => 85],
                    ['name' => 'Database Design', 'percentage' => 90],
                    ['name' => 'DevOps', 'percentage' => 80],
                ] as $skill)
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex justify-between mb-2">
                        <span class="font-medium">{{ $skill['name'] }}</span>
                        <span class="text-blue-600">{{ $skill['percentage'] }}%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: {{ $skill['percentage'] }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Timeline -->
        <div class="mt-24">
            <h2 class="text-3xl font-bold mb-12 text-center">My Journey</h2>
            <div class="space-y-8">
                @foreach([
                    ['year' => '2023', 'title' => 'Senior Developer', 'company' => 'Tech Corp'],
                    ['year' => '2020', 'title' => 'Lead Developer', 'company' => 'Web Solutions'],
                    ['year' => '2018', 'title' => 'Full Stack Developer', 'company' => 'Digital Agency'],
                ] as $experience)
                <div class="flex">
                    <div class="flex flex-col items-center mr-6">
                        <div class="bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center">
                            {{ $experience['year'] }}
                        </div>
                        <div class="flex-1 w-px bg-gray-300 my-2"></div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm flex-1">
                        <h3 class="font-semibold text-lg">{{ $experience['title'] }}</h3>
                        <p class="text-gray-600">{{ $experience['company'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>