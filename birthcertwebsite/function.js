var selected;
var playing = false;
var previousSelect
const image_input = document.querySelector("#image_input");
var uploaded_image = false;
var audio = new Audio("anthem.mp3");
var img = document.createElement('img');

document.querySelector(".mcd").addEventListener('click', function(e){
    previousSelect = selected;
    selected = document.querySelector(".mcd")
    previousSelect.classList.remove("selected");
    selected.classList.add("selected");
    console.log(selected)
    
})
document.querySelector(".m10").addEventListener('click', function(e){
    previousSelect = selected;
    selected = document.querySelector(".m10")
    previousSelect.classList.remove("selected");
    selected.classList.add("selected");
    console.log(selected)
})
document.querySelector(".hk").addEventListener('click', function(e){
    previousSelect = selected;
    selected = document.querySelector(".hk")
    previousSelect.classList.remove("selected");
    selected.classList.add("selected");
    console.log(selected)
})
document.querySelector(".bc").addEventListener('click', function(e){
    previousSelect = selected;
    selected = document.querySelector("#bc-container");
    if(previousSelect){
    previousSelect.classList.remove("selected");
}
    selected.classList.add("selected");
    console.log(selected)
})
function select(item){
    selected = document.getElementByClass(item);
    selected.classList.add("selected");

}
document.getElementById("expand-mcd").addEventListener('click', function(e){
    document.getElementById("big-mcd").classList.remove("hidden")
})
document.getElementById("expand-m10").addEventListener('click', function(e){
    document.getElementById("big-m10").classList.remove("hidden")
})
document.getElementById("expand-hk").addEventListener('click', function(e){
    document.getElementById("big-hk").classList.remove("hidden")
})
document.getElementById("close-mcd").addEventListener('click', function(e){
    document.getElementById("big-mcd").classList.add("hidden")
})
document.getElementById("close-m10").addEventListener('click', function(e){
    document.getElementById("big-m10").classList.add("hidden")
})
document.getElementById("close-hk").addEventListener('click', function(e){
    document.getElementById("big-hk").classList.add("hidden")
})
document.getElementById("upload-bc").addEventListener('click', function(e){
   
        document.getElementById("upload-popup").classList.remove("hidden")

        document.getElementById("uploaded").addEventListener('click', async function() {
        
                const data = new FormData();
                data.append("image",image_input.files[0]);
                data.append("submit","submit");

                const response = await fetch('./custom-image.php', {
                   method: 'POST',
                    body: data,
                });
                if (response.ok) {
                    const json = await response.json();
                    const pathToCustomImage = '/' + json.path;
                    img.src = pathToCustomImage;
                    uploaded_image = true;

                }
                document.getElementById("uploaded").removeEventListener('click',this);
    })
       
    
});

document.getElementById("close-upload").addEventListener('click', function(e){
    document.getElementById("upload-popup").classList.add("hidden")
})
document.getElementById("uploaded").addEventListener('click', function(e){
    document.getElementById("upload-popup").classList.add("hidden")
})

// document.getElementById("submit-choice").addEventListener('click', function(e){
//     console.log("i have reached")
   
//     if(selected == null){
//         alert("You have not selected a style for your birth certificate")
//     }
    
        
//         window.location.replace("result.php")
//         selectedImage()
    
    
// })

document.getElementById("sticker").addEventListener('click', function(e){
    if(playing){
        audio.stop();
        
        playing = false
    }
    if(!playing){
        audio.play();
        playing = true
       if(audio.ended()) {
        playing = false
       }

    }
    
    })


    function myFunction() {
        // document.getElementById('imgSrc').value = selected.src;
        // alert("a");
        if(selected){
             
            document.getElementById('imgSrc').value = selected.src;
            
            
        }
        if(selected && uploaded_image){
            // selected = img;
                alert("You have selected to customise your birth certificate - if this is wrong please reload the page and make a new selection")
            document.getElementById('imgSrc').value = img.src
        }
        if(!selected && uploaded_image){
            // selected = img;
            document.getElementById('imgSrc').value = img.src
        }
        // }
        // if(selected && uploaded_image){
        //     selected.src = uploaded_image.src;
        //     alert("You have selected to customise your birth certificate - if this is wrong please reload the page and make a new selection")
        //     document.getElementById('imgSrc').value = selected.src

        // }
        if(!selected && !uploaded_image){
            alert("Please select a birth certificate style")

        }
        
        // alert (document.getElementById('XXX').value);
    
        document.getElementById('details-form').submit();
    
      }

  