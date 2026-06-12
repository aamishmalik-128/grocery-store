<script src="{{asset('dist-admin/js/scripts.js')}}"></script>
<script src="{{asset('dist-admin/js/custom.js')}}"></script>

 @if($errors->any())
    @foreach($errors->all() as $error)
    <script>
        iziToast.error({
            message:'{{$error}}',
            position:'topRight',
            timeout:4000,
            progressBarColor:'#FF000',
        })
    </script>
    @endforeach
    @endif

    @if(session('success'))
    <script>
        iziToast.success({
            message:'{{session('success')}}',
            position:'topRight',
            timeout:4000,
            progressBarColor:'#FF000',
        })
    </script>
    @endif
    @if(session('error'))
    <script>
        iziToast.error({
            message:'{{session('error')}}',
            position:'topRight',
            timeout:4000,
            progressBarColor:'#FF000',
        })
    </script>
    @endif
