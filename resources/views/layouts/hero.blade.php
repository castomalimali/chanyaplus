
<style>
    .hero {
  width: 100%;
  height: 40vh;
  background: #002231ce;
}
.animated h1{
    color: wheat;
}

.hero .container {
  padding-top: 72px;
}

.hero h1, {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
  margin-bottom: 3rem;

}


.hero .animated {
  animation: up-down 2s ease-in-out;
}

@media (max-width: 991px) {
  .hero {
    height: 35vh;
    text-align: center;
  }


}

@media (max-width: 768px) {
  .hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

}

@media (max-width: 575px) {
    .hero h1 {
    font-size: 28px;
    line-height: 36px;s
  }
  .hero{
    height: 30vh;
  }
}

@keyframes up-down {
  0% {
    transform: translateY(10px);
  }

  100% {
    transform: translateY(-10px);
  }
}

</style>

<div class="hero">
  <div class="container">
    <h1 class="animated " style="color: white">
       @yield('title', $title)
    </h1>

  </div>
</div>
