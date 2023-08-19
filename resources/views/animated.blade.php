<style>
    .cardBox {
  width: 250px;
  height: 300px;
  position: relative;
  display: grid;
  place-items: center;
  overflow: hidden;
  border-radius: 20px;
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 10px 0px,
    rgba(0, 0, 0, 0.5) 0px 2px 25px 0px;
}

.card {
  position: absolute;
  width: 95%;
  height: 95%;
  background: #000814;
  border-radius: 20px;
  z-index: 5;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  color: #ffffff;
  overflow: hidden;
  padding: 20px;
  cursor: pointer;
  box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 60px -12px inset,
    rgba(0, 0, 0, 0.5) 0px 18px 36px -18px inset;
}

.card .h4 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 20px;
  font-weight: 800;
  pointer-events: none;
  opacity: .5;
}

.card .content .h3 {
  font-size: 18px;
  font-weight: 800;
  margin-bottom: 10px;
}

.card .content p {
  font-size: 14px;
  line-height: 1.4em;
}

.card .content {
  transform: translateY(100%);
  opacity: 0;
  transition: 0.3s ease-in-out;
}

.card:hover .content {
  transform: translateY(0);
  opacity: 1;
}

.card:hover .h4 {
  opacity: 0;
}

.cardBox::before {
  content: "";
  position: absolute;
  width: 40%;
  height: 150%;
  background: #40E0D0;
  background: -webkit-linear-gradient(to right, #FF0080, #FF8C00, #40E0D0);
  background: linear-gradient(to right, #FF0080, #FF8C00, #40E0D0);
  transform-origin: center;
  animation: glowing_401 5s linear infinite;
}

@keyframes glowing_401 {
  0% {
    transform: rotate(0);
  }

  100% {
    transform: rotate(360deg);
  }
}

</style>
<div class="cardBox">
    <div class="card">
       <div class="h4">Animated card</div>

      <div class="content">
        <div class="h3">How's it goin Fam ?</div>
        <p>This is Pradeep Saran, your tech mate!!! I love you all. Lets make this world a better place for all of us. Keep prospering...Keep learning!!!</p>
      </div>
    </div>
  </div>
