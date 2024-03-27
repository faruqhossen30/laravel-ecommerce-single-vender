<section class="container mx-auto py-5">
    <ol class="flex items-center min-w-0 p-2 whitespace-nowrap" aria-label="Breadcrumb">
        <li class="text-sm font-semibold">
            <a href="{{ route('homepage') }}" class="flex items-center text-black hover:text-green-600 space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>

                <span>Home</span>
                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600"
                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </a>
        </li>
        <li class="text-sm ml-2">
            <a href="{{ route($route) }}" class="flex items-center text-black font-semibold hover:text-green-600">
                {{ $title }}
            </a>
        </li>
        @if (isset($subpage))
            <li class="text-sm font-normal text-gray-800 truncate dark:text-gray-200" aria-current="page">
                <span class="flex items-center text-black hover:text-green-600">
                    <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600"
                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    {{ $subpage }}
                </span>
            </li>
        @endif

    </ol>

</section>
