
<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
};
?>

<aside class="min-h-screen w-full bg-slate-900 text-white md:w-64 md:shrink-0">

    <!-- Sidebar Header -->
    <div class="border-b border-slate-700 px-6 py-6">
        <h1 class="text-xl font-bold">
            Clinic Management
        </h1>

        <p class="mt-1 text-sm text-slate-400">
            System Navigation
        </p>
    </div>

    <!-- Navigation Menu -->
    <nav class="space-y-6 px-4 py-5">

        <!-- Dashboard -->
        <div>
            <a
                href="{{ route('dashboard') }}"
                wire:navigate
                class="block rounded-lg px-3 py-2 text-sm font-semibold {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }}"
            >
                Dashboard
            </a>
        </div>

        <!-- Patient Care -->
        <div>
            <h2 class="mb-2 px-3 text-xs font-bold uppercase tracking-wider text-slate-500">
                Patient Care
            </h2>

            <div class="space-y-1">
                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Patients
                </span>

                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Appointments
                </span>

                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Encounters
                </span>

                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Medical Records
                </span>
            </div>
        </div>

        <!-- Clinical -->
        <div>
            <h2 class="mb-2 px-3 text-xs font-bold uppercase tracking-wider text-slate-500">
                Clinical
            </h2>

            <div class="space-y-1">
                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Prescriptions
                </span>

                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Laboratory
                </span>

                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Referrals
                </span>
            </div>
        </div>

        <!-- Operations -->
        <div>
            <h2 class="mb-2 px-3 text-xs font-bold uppercase tracking-wider text-slate-500">
                Operations
            </h2>

            <div class="space-y-1">
                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Billing
                </span>

                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Pharmacy
                </span>

                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Inventory
                </span>
            </div>
        </div>

        <!-- Reports -->
        <div>
            <h2 class="mb-2 px-3 text-xs font-bold uppercase tracking-wider text-slate-500">
                Reports
            </h2>

            <div class="space-y-1">
                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Patient Reports
                </span>

                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Clinical Reports
                </span>

                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Financial Reports
                </span>
            </div>
        </div>

        <!-- Administration -->
        <div>
            <h2 class="mb-2 px-3 text-xs font-bold uppercase tracking-wider text-slate-500">
                Administration
            </h2>

            <div class="space-y-1">
                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Users
                </span>

                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Roles &amp; Permissions
                </span>

                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Clinic Settings
                </span>

                <span class="block rounded-lg px-3 py-2 text-sm text-slate-300">
                    Audit Logs
                </span>
            </div>
        </div>

    </nav>

    <!-- User Account -->
    <div class="border-t border-slate-700 px-4 py-5">
        @auth
            <p class="px-3 text-sm font-semibold text-white">
                {{ auth()->user()->name }}
            </p>

            <p class="mt-1 break-words px-3 text-xs text-slate-400">
                {{ auth()->user()->email }}
            </p>

            <a
                href="{{ route('profile') }}"
                wire:navigate
                class="mt-3 block rounded-lg px-3 py-2 text-sm text-slate-300 hover:bg-slate-800 hover:text-white"
            >
                My Profile
            </a>

            <button
                type="button"
                wire:click="logout"
                class="mt-1 w-full rounded-lg px-3 py-2 text-left text-sm text-red-300 hover:bg-slate-800 hover:text-red-200"
            >
                Log Out
            </button>
        @else
            <a
                href="{{ route('login') }}"
                wire:navigate
                class="block rounded-lg px-3 py-2 text-sm text-slate-300 hover:bg-slate-800 hover:text-white"
            >
                Log In
            </a>

            <a
                href="{{ route('register') }}"
                wire:navigate
                class="mt-1 block rounded-lg px-3 py-2 text-sm text-slate-300 hover:bg-slate-800 hover:text-white"
            >
                Register
            </a>
        @endauth
    </div>

</aside>
