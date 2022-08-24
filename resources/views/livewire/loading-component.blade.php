  {{-- loading --}}
  <div id="pre-loader"><img src="{{ asset('assets/images/loader.gif') }}" alt="Loading..." /></div>
  <style>
      /* loading */
      #pre-loader {
          background-color: #000;
          height: 100%;
          width: 100%;
          position: fixed;
          margin-top: 0px;
          top: 0px;
          left: 0px;
          right: 0px;
          bottom: 0px;
          overflow: hidden;
          z-index: 999999;
      }

      #pre-loader img {
          text-align: center;
          left: 0;
          position: absolute;
          right: 0;
          top: 50%;
          transform: translateY(-50%);
          -webkit-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          -moz-transform: translateY(-50%);
          z-index: 99;
          margin: 0 auto;
      }
  </style>
  <script>
      function pre_loader() {
          $("#load").fadeOut();
          $('#pre-loader').delay(500).fadeOut(500);
      }
      pre_loader();
  </script>
