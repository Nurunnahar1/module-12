<div class="container my-5">
    <div class="row">
        <div class="col-md-10 offset-1">
            <h3>Comments</h3>
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" id="contactForm">
                        @csrf

                        <div class="mb-3">

                            <label for="name" class="form-label"> </label>
                            <input type="text" class="form-control" id="name" placeholder="name">
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="comment" id="comment" style="height: 100px"></textarea>
                            <label for="content">Comments</label>
                            <input type="hidden" name="content" id="content">
                          </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    $(document).ready.(function(e){
         e.preventDefault();
         let name = $('#name').val();
         let content = $('#content').val();

         console.log(name+content);
    })
</script> --}}
