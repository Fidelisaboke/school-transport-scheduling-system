<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-4/5 mx-auto md:w-full max-w-7xl sm:px-6 lg:px-8">
            <div class="w-full space-y-8 md:flex md:justify-center">
                <div class="md:flex md:space-x-8 lg:space-x-12">
                    <div class="md:w-1/2">
                        <div class="p-4 bg-white rounded-lg shadow-xl">
                            <h2 class="text-lg font-semibold text-gray-800">User Profile</h2>
                            <x-user-profile-card />
                        </div>
                        <div class="p-4 mt-8 bg-white rounded-lg shadow-xl">
                            <h2 class="text-lg font-semibold text-gray-800">Upcoming Trips</h2>
                            <x-upcoming-trips-table />
                            <!-- View full schedule -->
                            <a href="{{ route('transport_schedules.index') }}" class="block w-full p-2 mt-4 text-center text-white rounded-lg bg-fuchsia-700 hover:bg-fuchsia-800">View Full Schedule</a>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="p-4 mt-8 bg-white rounded-lg shadow-xl md:mt-0">
                            <h2 class="text-lg font-semibold text-gray-800">Transport Request History</h2>
                            <x-transport-request-history />
                            <!-- View transport requests -->
                            <a href="{{ route('transport_requests.index') }}" class="block w-full p-2 mt-4 text-center text-white rounded-lg bg-fuchsia-700 hover:bg-fuchsia-800">View Transport Requests</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
