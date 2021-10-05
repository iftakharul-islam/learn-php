<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Scroll</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    html{
        font-size: 62.5%;
    }
    body{
        background-color: #3498db;
        padding: 5rem 0;
    }
    .container{
        min-width: 20rem;
        margin: 0 auto;
        width: 70vw;
        /* background: green; */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .container h1{
        font-size: 4rem;
    }
    .container .posts{
       background: aliceblue;
       margin: 1.5rem 0;
       padding: 1rem 2rem;
       font-size: 1.4rem;
       border-radius: 1rem;
       box-shadow: 0 2rem 2rem -1.7rem rgba(0, 0, 0, .3);
    }
    .post-id{
        height: 4.5rem;
        width: 4.5rem;
        background: #2980b9;
        border-radius: 1rem;
        display: grid;
        place-items: center;
        color:aliceblue;
        font-size: 2rem;
    }
    .title{
        margin: 2rem 0 1rem 0;
        text-transform: capitalize;
    }
    .post-info{
        font-size: 1.7rem;
    }
</style>
<body>

    <div class="container">
        <h1>Infinite Post Scroll</h1>
        
    </div>

<script>

const container = document.querySelector('.container');
let limit = 8;
let pageCount = 1;
let postCount = 1;

const getPost = async () =>{
   const response = await fetch(`https://jsonplaceholder.typicode.com/posts?_limit=${limit}$_page=${pageCount}`);
    const data = await response.json();
    // console.log(data);

    data.map((elem,index) => {
        const htmlData = `<div class="posts">
            <p class='post-id'>${pageCount++}</p>
            <h2 class="title"> ${elem.title} </h2>
            <p class="post-info">
            ${elem.body}
            </p>
        </div>`;
        container.insertAdjacentHTML('beforeend',htmlData);
    })
}
getPost();

const showData = () =>{
    setTimeout(()=>{
    pageCount++;
    getPost();
    },0);
}
window.addEventListener('scroll', ()=>{
   const {scrollHeight, scrollTop, clientHeight} =  document.documentElement 
   
   if(scrollTop + clientHeight>= scrollHeight){
       showData();
       console.log(scrollTop + clientHeight  , scrollHeight );
   }
})
</script>
</body>
</html>