<div>
    <!-- Your home page content here -->
    <h1>Welcome to Home Page</h1>
    <p>{{ $message }}</p>
    
    <!-- Add a button to test Livewire interactivity -->
    <button wire:click="$set('message', 'Button clicked!')" class="px-4 py-2 bg-blue-500 text-white rounded">
        Click me
    </button>
</div>