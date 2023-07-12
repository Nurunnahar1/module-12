<div class="row mt-5 " id="post">
    {{-- <div class="col-md-4">
        <article>

            <img id="image" src="images/2.jpg" alt="Blog Post Image" class="img-fluid mb-3">

            <h1 id="title">Post</h1>
            <p id="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in augue sed sapien viverra
                commodo. Nullam
            </p>

            <div class="text-center">
                <a href="single-post.html" class="btn btn-primary ">Read More</a>
            </div>
        </article>
    </div> --}}
</div>

<script>
    show_post();
    async function show_post() {
        let URL = '/show_post'
        try {

            let response = await axios.get(URL);


            response.data.forEach((item) => {
                let button = item.id
                document.getElementById('post').innerHTML += (`
                <div class="col-md-4">
        <article>
                    <img id="image" src="${item['image']}" alt="Blog Post Image" class="img-fluid mb-3">

                    <h1 id="title">${item['title']}</h1>
                    <p id="">${item['content']} </p>

                    <div class="text-center">


                   <a href="/postdetail/${button}" class="btn btn-primary " >Read More</a>

                    </div>
                </article>
    </div>
                `)
            })
        } catch (error) {
            alert(error)
        }
    }
</script>
