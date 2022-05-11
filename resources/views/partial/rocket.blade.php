@push('style')
@endpush

<button onclick="topFunction()" id="rocket" title="Go to top" style="display: none"
    class="z-50 p-2 rounded-lg border bg-white border-black fixed bottom-4 right-4 md:right-2 md:bottom-2 md:p-3 cursor-pointer">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18" />
    </svg>
</button>

@push('script')
    <script>
        window.onscroll = () => {
            if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
                document.getElementById("rocket").style.display = "block";
            } else {
                document.getElementById("rocket").style.display = "none";
            }
        };

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
@endpush
