let model;
let class_indices;
let fileUpload = document.getElementById('uploadImage')
let img = document.getElementById('image')
let boxResult = document.querySelector('.box-result')
let confidence = document.querySelector('.confidence')
let pconf = document.querySelector('.box-result p')

img.style.display = "none";




        async function fetchData(){
            let response = await fetch('/efarm/class_indices.json');
            let data = await response.json();
            data = JSON.stringify(data);
            data = JSON.parse(data);
            return data;
        }

         // here the data will be return.


        // Initialize/Load model
        async function initialize() {
            let status = document.querySelector('.init_status')
            status.innerHTML = 'Loading Model .... <span class="fa fa-spinner fa-spin"></span>'
            model = await tf.loadLayersModel('/efarm/tensorflowjs-model/model.json');
            status.innerHTML = 'Model Loaded Successfully  <span class="fa fa-check"></span>'
        }

        async function predict() {
            // Function for invoking prediction
            let img = document.getElementById('image')
            let offset = tf.scalar(255)
            let tensorImg =   tf.browser.fromPixels(img).resizeNearestNeighbor([224,224]).toFloat().expandDims();
            let tensorImg_scaled = tensorImg.div(offset)
            prediction = await model.predict(tensorImg_scaled).data();

            fetchData().then((data)=>
                {
                    predicted_class = tf.argMax(prediction)

                    class_idx = Array.from(predicted_class.dataSync())[0]
                    document.querySelector('.pred_class').value = data[class_idx]
                    document.querySelector('.inner').innerHTML = `${parseFloat(prediction[class_idx]*100).toFixed(2)}% SURE`
                    console.log(data)
                    console.log(data[class_idx])
                    console.log(prediction)



                    pconf.style.display = 'block'

                    confidence.innerHTML = Math.round(prediction[class_idx]*100)

                }
            );

        }



        fileUpload.addEventListener('change', function(e){

            let uploadedImage = e.target.value
            if (uploadedImage){
                document.getElementById("blankFile-1").innerHTML = uploadedImage.replace("C:\\fakepath\\","")
                document.querySelector(".success-1").style.display = "inline-block"

                let extension = uploadedImage.split(".")[1]
            }
            let file = this.files[0]
            if (file){
                boxResult.style.display = 'block'
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.addEventListener("load", function(){

                    img.style.display = "block"
                    img.setAttribute('src', this.result);
                });
            }

            else{
            img.setAttribute("src", "");
            }

            initialize().then( () => {
                predict()
            })
        })
