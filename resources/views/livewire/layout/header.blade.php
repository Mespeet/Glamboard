<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<header class="w-full h-[150px] bg-accent px-6 py-[22px] border-b border-stroke flex flex-col justify-between">
    <div>
        <x-application-logo />
    </div>
    <div>
        <!-- Voeg automatische paginatie toe ipv "dashboard" -->
        <p class="text-2xl font-medium dark:text-foreground">Dashboard</p>
    </div>
</header>