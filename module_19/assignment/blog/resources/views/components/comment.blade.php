<div class="container my-5">
    <div class="row">
        <div class="col-md-10 offset-1">
            <h3>Comments</h3>
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" id="contactForm">
                        @csrf
                        @foreach ($comments as $comment)
                        <div class="mb-3">

                            <label for="name" class="form-label">{{ $comment->name }}</label>
                            <input type="name" class="form-control" id="name">
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="content" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>

                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        @endforeach

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

 let contactForm=document.getElementById('contactForm')
 contactForm.addEventListener('submit', async (event)=>{
    event.preventDefault();
    let name=document.getElementById('name').value;
    let email=document.getElementById('content').value;


    if(name.length===0){
        alert('Name is required')
    }else if(content.length===0){
        alert('content is required')

    }else{
        let formData={
            name:name,
            content:content ,

        }

        let URL="/comment";



        let result=await axios.post(URL,formData);


        if(result.status===200 && result.data===1){
            alert('Your request has been submited successfully');
            contactForm.reset();
        }else{
            alert('something is wrong');
        }
    }
 })

</script>
