@if (session('success'))
    <div class="alert alert-success">
        <p class="alert-p">{{ session('success') }}</p>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p class="alert-p">
                {{ $error }}
            </p>
        @endforeach
    </div>
@endif

<script>
    window.onload = function() {
        const block = document.querySelector('.alert');
        block && block.addEventListener('click', () => {
            block.classList.add('hidden');
        });
    }
</script>
