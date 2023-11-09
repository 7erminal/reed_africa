<style>
    .wrapper-p{
    position: absolute;
    /* top:50%;
    left:50%;
    transform: translate(-50%, -50%); */
    width: fit-content;
    height:auto;
}
.button-p{
    width:200px;
    height:70px;
    background: linear-gradient(to left top, #3ec4ae 50%, #28bfbc 50%);
    border-style: none;
    color:#fff;
    font-size: 23px;
    letter-spacing: 3px;
    font-family: 'Lato';
    font-weight: 600;
    outline: none;
    cursor: pointer;
    position: relative;
    padding: 0px;
    overflow: hidden;
    transition: all .5s;
    box-shadow: 0px 1px 2px rgba(0,0,0,.2);
}
.button-p span{
    position: absolute;
    display: block;
}
.button-p span:nth-child(1){
    height: 3px;
    width:200px;
    top:0px;
    left:-200px;
    background: linear-gradient(to right, rgba(0,0,0,0), #f6e58d);
    border-top-right-radius: 1px;
    border-bottom-right-radius: 1px;
    animation: span1 2s linear infinite;
    animation-delay: 1s;
}

@keyframes span1{
    0%{
        left:-200px
    }
    100%{
        left:200px;
    }
}
.button-p span:nth-child(2){
    height: 70px;
    width: 3px;
    top:-70px;
    right:0px;
    background: linear-gradient(to bottom, rgba(0,0,0,0), #f6e58d);
    border-bottom-left-radius: 1px;
    border-bottom-right-radius: 1px;
    animation: span2 2s linear infinite;
    animation-delay: 2s;
}
@keyframes span2{
    0%{
        top:-70px;
    }
    100%{
        top:70px;
    }
}
.button-p span:nth-child(3){
    height:3px;
    width:200px;
    right:-200px;
    bottom: 0px;
    background: linear-gradient(to left, rgba(0,0,0,0), #f6e58d);
    border-top-left-radius: 1px;
    border-bottom-left-radius: 1px;
    animation: span3 2s linear infinite;
    animation-delay: 3s;
}
@keyframes span3{
    0%{
        right:-200px;
    }
    100%{
        right: 200px;
    }
}

.button-p span:nth-child(4){
    height:70px;
    width:3px;
    bottom:-70px;
    left:0px;
    background: linear-gradient(to top, rgba(0,0,0,0), #f6e58d);
    border-top-right-radius: 1px;
    border-top-left-radius: 1px;
    animation: span4 2s linear infinite;
    animation-delay: 4s;
}
@keyframes span4{
    0%{
        bottom: -70px;
    }
    100%{
        bottom:70px;
    }
}

.button-p:hover{
    transition: all .5s;
    transform: rotate(-3deg) scale(1.1);
    box-shadow: 0px 3px 5px rgba(0,0,0,.4);
}
.button-p:hover span{
    animation-play-state: paused;
}
</style>

<section style="width: 100vw;">
<div class="row" style="width: 100vw; text-align: center; display: flex; justify-content: center;">
    <div class="col-6" style="text-align: center;">
    <p>
        <h4>
    Your support is crucial to our mission. By donating, you're helping us provide educational opportunities, promote literacy skills, and bridge the digital gap as well as fight period poverty. Every contribution makes a difference.
        </h4>
    </p>
    </div>
</div>   
<div class="row" style="width: 100vw; max-height: 200px; background-color: white; text-align: center; padding-top: 50px; padding-bottom: 50px; display: flex; justify-content: center;"> 
    <!-- <div class="col-3">     -->
        <div class="wrapper-p">
            <button class="button-p">
                Donate 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    <!-- </div> -->
</div>
</section>