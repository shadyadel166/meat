<x-head></x-head>
<style>

body {
  display: grid;
  grid-template-rows: 1fr 10rem auto;
  grid-template-areas: "main" "." "footer";
  overflow-x: hidden;
  background: #F5F7FA;
  /* min-height: 100vh; */
  font-family: "Open Sans", sans-serif;

}
body .footer {
  z-index: 1;
  --footer-background:#ee1c31;
  display: grid;
  position: relative;
  grid-area: footer;
  /* min-height: 0rem; */
}
body .footer .bubbles {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  margin-bottom: 0%;
  height: 1rem;
  background: var(--footer-background);
  filter: url("#blob");
}
body .footer .bubbles .bubble {
  position: absolute;
  left: var(--position, 50%);
  background: var(--footer-background);
  border-radius: 100%;
  -webkit-animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
          animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
  transform: translate(-50%, 100%);
}
body .footer .content {
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr auto;
  grid-gap: 4rem;
  /* padding: 2rem; */
  background: var(--footer-background);
}
body .footer .content a, body .footer .content p {
  color: #F5F7FA;
  text-decoration: none;
}
body .footer .content b {
  color: white;
}
body .footer .content p {
  margin: 0;
  font-size: 0.75rem;
}
body .footer .content > div {
  display: flex;
  flex-direction: column;
  justify-content: center;
}
body .footer .content > div > div {
  margin: 0;
}
body .footer .content > div > div > * {
  margin-right: 0.5rem;
}
body .footer .content > div .image {
  align-self: center;
  width: 4rem;
  /* height: 4rem; */
  margin: 0;
  background-size: cover;
  background-position: center;
}

@-webkit-keyframes bubble-size {
  0%, 75% {
    width: var(--size, 4rem);
    height: var(--size, 4rem);
  }
  100% {
    width: 0rem;
    height: 0rem;
  }
}

@keyframes bubble-size {
  0%, 75% {
    width: var(--size, 4rem);
    height: var(--size, 4rem);
  }
  100% {
    width: 0rem;
    height: 0rem;
  }
}
@-webkit-keyframes bubble-move {
  0% {
    bottom: -4rem;
  }
  100% {
    bottom: var(--distance, 10rem);
  }
}
@keyframes bubble-move {
  0% {
    bottom: -4rem;
  }
  100% {
    bottom: var(--distance, 10rem);
  }
}

</style>
<body>
    <!-- partial:index.partial.html -->
    <div class="main"></div>
    <div class="footer">
      <div class="bubbles">
        <div class="bubble" style="--size:3.9512516548367467rem; --distance:8.119479613012103rem; --position:77.67145578976056%; --time:2.4588497853551208s; --delay:-3.8094179902939205s;"></div>
        <div class="bubble" style="--size:3.436542762099048rem; --distance:9.832711832831919rem; --position:14.471441112104035%; --time:3.9529707747315657s; --delay:-3.2221353731758557s;"></div>
        <div class="bubble" style="--size:3.200024204977024rem; --distance:7.604943137767575rem; --position:58.267533732990806%; --time:2.948448312397856s; --delay:-2.0037541185741152s;"></div>
        <div class="bubble" style="--size:4.997459781906394rem; --distance:9.026616331372946rem; --position:35.09166301716008%; --time:2.696813767574118s; --delay:-3.789541216055996s;"></div>
        <div class="bubble" style="--size:2.554891883843803rem; --distance:7.274014754263606rem; --position:24.827629780215933%; --time:2.6412232582812245s; --delay:-2.203567755844479s;"></div>
        <div class="bubble" style="--size:4.911879990722851rem; --distance:8.598603736823234rem; --position:78.1472569949951%; --time:2.7657015377650453s; --delay:-3.0670934124710842s;"></div>
        <div class="bubble" style="--size:4.669894815044179rem; --distance:9.805384072958603rem; --position:27.751110697416514%; --time:2.746698349832478s; --delay:-3.8609089829006082s;"></div>
        <div class="bubble" style="--size:5.195973629444784rem; --distance:7.601182588850886rem; --position:29.513447009623917%; --time:2.1836254910255692s; --delay:-3.8241106706524164s;"></div>
        <div class="bubble" style="--size:3.0067795488435856rem; --distance:9.708681710589877rem; --position:75.8690556651227%; --time:3.3516793217736702s; --delay:-3.1098505549311755s;"></div>
        <div class="bubble" style="--size:3.7210699565063683rem; --distance:8.519975307271157rem; --position:-2.3209599824334726%; --time:2.191024719768248s; --delay:-2.620024995018261s;"></div>
        <div class="bubble" style="--size:4.1446399063455rem; --distance:8.52576227436137rem; --position:9.887390884061325%; --time:3.6427431869533398s; --delay:-2.7158588573872846s;"></div>
        <div class="bubble" style="--size:3.383374127423755rem; --distance:7.1525360549228445rem; --position:7.90417153313083%; --time:3.686443209729083s; --delay:-2.2155072262997404s;"></div>
        <div class="bubble" style="--size:4.285737689591833rem; --distance:7.523372129788697rem; --position:60.27161876190486%; --time:3.2539060925148084s; --delay:-2.833279219632988s;"></div>
        <div class="bubble" style="--size:2.347355777255326rem; --distance:9.62794140845632rem; --position:50.11647632979407%; --time:3.420806852786405s; --delay:-2.5136967788905804s;"></div>
        <div class="bubble" style="--size:3.8492934746211143rem; --distance:6.232351886608805rem; --position:71.809417833525%; --time:3.915175267711068s; --delay:-3.202180115524178s;"></div>
        <div class="bubble" style="--size:2.111914835730821rem; --distance:9.975968541101757rem; --position:57.91779232763882%; --time:3.1446895586490733s; --delay:-3.894795881936298s;"></div>
        <div class="bubble" style="--size:2.2679712496157194rem; --distance:6.398321142076302rem; --position:68.1271743548269%; --time:3.149235517062144s; --delay:-2.596803297586594s;"></div>
        <div class="bubble" style="--size:3.0399540028365157rem; --distance:9.073398966982527rem; --position:88.93269775055056%; --time:3.3308173906471463s; --delay:-2.6641514652931138s;"></div>
        <div class="bubble" style="--size:2.557761126961598rem; --distance:8.919926070263365rem; --position:-2.121840870666778%; --time:2.567715872982822s; --delay:-2.5679321351128657s;"></div>
        <div class="bubble" style="--size:5.808578468214082rem; --distance:8.023962129878615rem; --position:53.77327178120899%; --time:3.7060157834718925s; --delay:-2.754020260723895s;"></div>
        <div class="bubble" style="--size:3.0434446187760855rem; --distance:6.42175351218898rem; --position:6.440354423297949%; --time:3.010652185639568s; --delay:-3.505903090364355s;"></div>
        <div class="bubble" style="--size:5.409003547751992rem; --distance:9.340708164748076rem; --position:-1.4938660442884721%; --time:2.2709245675178606s; --delay:-3.179569181496074s;"></div>
        <div class="bubble" style="--size:5.217181909303135rem; --distance:9.130042350449942rem; --position:28.004955240935644%; --time:2.22060170083459s; --delay:-2.9183736196646572s;"></div>
        <div class="bubble" style="--size:4.310816277442094rem; --distance:7.057227139896549rem; --position:78.6795933166539%; --time:2.215907240947703s; --delay:-3.448582023816254s;"></div>
        <div class="bubble" style="--size:3.176968532809764rem; --distance:8.828630579987491rem; --position:2.4861970887549845%; --time:2.8418240096829517s; --delay:-3.6082114497735684s;"></div>
        <div class="bubble" style="--size:2.854194433795354rem; --distance:9.463436675915082rem; --position:22.82614276432034%; --time:2.546861373431938s; --delay:-2.1070559104328264s;"></div>
        <div class="bubble" style="--size:3.0169654067021145rem; --distance:8.41283504439485rem; --position:8.084288200190757%; --time:2.295480640410679s; --delay:-2.3307619262172237s;"></div>
        <div class="bubble" style="--size:5.628697350102453rem; --distance:9.480596595738543rem; --position:97.93919961809475%; --time:3.4087368296538907s; --delay:-2.048843709288573s;"></div>
        <div class="bubble" style="--size:2.5587747429040517rem; --distance:9.891304903731136rem; --position:76.54448560273603%; --time:2.87826209203691s; --delay:-2.4655802158671847s;"></div>
        <div class="bubble" style="--size:3.2668300175673224rem; --distance:6.648970251925221rem; --position:-1.091500666660985%; --time:2.2345307456168415s; --delay:-3.910282585397664s;"></div>
        <div class="bubble" style="--size:2.1235036503510143rem; --distance:9.19180214245983rem; --position:69.06165774870728%; --time:2.155510533590564s; --delay:-2.709660028504661s;"></div>
        <div class="bubble" style="--size:5.74094374171082rem; --distance:7.781341447935856rem; --position:57.820174288255316%; --time:3.1444607845610517s; --delay:-3.627425149089864s;"></div>
        <div class="bubble" style="--size:2.9348552113391575rem; --distance:9.764819196260891rem; --position:94.3491338412533%; --time:2.3742294834316873s; --delay:-3.8656390068265125s;"></div>
        <div class="bubble" style="--size:2.1599005666807045rem; --distance:6.761950888126706rem; --position:1.082202520279365%; --time:2.7069519503024604s; --delay:-3.4227685651553847s;"></div>
        <div class="bubble" style="--size:4.145188520040956rem; --distance:8.411504575993938rem; --position:42.156596710155505%; --time:3.8372891217192713s; --delay:-2.6588015134933594s;"></div>
        <div class="bubble" style="--size:5.950394756486579rem; --distance:8.669503693190034rem; --position:61.69997312641456%; --time:2.010654018022296s; --delay:-3.2582028465521193s;"></div>
        <div class="bubble" style="--size:2.931822380141088rem; --distance:9.90405138273175rem; --position:8.554351969626303%; --time:2.502865469130534s; --delay:-3.0125989599999157s;"></div>
        <div class="bubble" style="--size:2.816800574824124rem; --distance:9.934375431550226rem; --position:1.753675055871991%; --time:3.5758782008684213s; --delay:-3.2918857069351763s;"></div>
        <div class="bubble" style="--size:4.884165205970853rem; --distance:7.254044200358499rem; --position:92.37518959301829%; --time:3.3491399571534526s; --delay:-3.9679006839098245s;"></div>
        <div class="bubble" style="--size:2.78852767709492rem; --distance:6.2893914488818385rem; --position:82.39116921649973%; --time:3.2332299391178503s; --delay:-2.1470027607019326s;"></div>
        <div class="bubble" style="--size:5.666970919158509rem; --distance:8.257909970348878rem; --position:77.29713856367019%; --time:3.4170888908175776s; --delay:-3.75923059488733s;"></div>
        <div class="bubble" style="--size:2.386763238448463rem; --distance:7.414855784520539rem; --position:39.05179569797219%; --time:3.958897537277218s; --delay:-3.5251489570373358s;"></div>
        <div class="bubble" style="--size:3.365747181562514rem; --distance:6.864095038017157rem; --position:37.166731461457694%; --time:3.1042232142953643s; --delay:-2.738076374910595s;"></div>
        <div class="bubble" style="--size:2.924694970251849rem; --distance:7.431643126468839rem; --position:83.14936096956947%; --time:3.318577585984459s; --delay:-2.340924335882695s;"></div>
        <div class="bubble" style="--size:2.4716451713711756rem; --distance:6.106322383987418rem; --position:38.16583198741795%; --time:2.1748782292518056s; --delay:-3.6515897823862864s;"></div>
        <div class="bubble" style="--size:5.713703231246236rem; --distance:6.719000847647078rem; --position:76.30753450195573%; --time:3.6780789550051036s; --delay:-2.0363396250912356s;"></div>
        <div class="bubble" style="--size:2.4403695133725867rem; --distance:7.322661064912256rem; --position:31.017499179323032%; --time:3.6575629295545955s; --delay:-2.366623320690778s;"></div>
        <div class="bubble" style="--size:3.4606984401684375rem; --distance:7.762505537577788rem; --position:57.43852868197623%; --time:2.399975972894939s; --delay:-2.9443943152306864s;"></div>
        <div class="bubble" style="--size:5.615710580171501rem; --distance:7.569920532405174rem; --position:8.408348214918817%; --time:2.7369494783688584s; --delay:-2.477470625124314s;"></div>
        <div class="bubble" style="--size:4.472718350388239rem; --distance:8.276567077146481rem; --position:0.9939230515514623%; --time:2.1517845533588704s; --delay:-3.180181631405521s;"></div>
        <div class="bubble" style="--size:3.4501904709192566rem; --distance:9.965080362019739rem; --position:90.03912369485843%; --time:3.75202411476936s; --delay:-2.9254863961634694s;"></div>
        <div class="bubble" style="--size:5.871488753605911rem; --distance:8.222714453823603rem; --position:50.78015884252463%; --time:3.047783026056991s; --delay:-2.987975710744476s;"></div>
        <div class="bubble" style="--size:5.151931855485647rem; --distance:8.836604122582095rem; --position:57.33585618631244%; --time:2.6332350872315735s; --delay:-3.7972236034266498s;"></div>
        <div class="bubble" style="--size:3.475172000819634rem; --distance:9.006977781772243rem; --position:58.48954152501847%; --time:2.0831294889228165s; --delay:-3.605287391780915s;"></div>
        <div class="bubble" style="--size:5.813314534409347rem; --distance:6.820109868508675rem; --position:98.20050725719851%; --time:3.743964459201526s; --delay:-2.1901183643025988s;"></div>
        <div class="bubble" style="--size:2.6703037871763rem; --distance:7.43505402168717rem; --position:50.099697538977644%; --time:2.080252842662464s; --delay:-3.354213274230534s;"></div>
        <div class="bubble" style="--size:4.095269741576431rem; --distance:7.239640422343065rem; --position:97.75695878349046%; --time:2.1297320583021513s; --delay:-2.755570798214674s;"></div>
        <div class="bubble" style="--size:5.416204770202199rem; --distance:6.1648019265399565rem; --position:67.59128236036965%; --time:2.0602037066423375s; --delay:-2.0060798372260145s;"></div>
        <div class="bubble" style="--size:4.68175252679927rem; --distance:6.167508426812129rem; --position:9.980690076275295%; --time:3.7916152004290478s; --delay:-2.858761707688589s;"></div>
        <div class="bubble" style="--size:3.67912239545499rem; --distance:7.516959383214414rem; --position:88.87104623455943%; --time:2.1846331774764804s; --delay:-3.867406639110162s;"></div>
        <div class="bubble" style="--size:5.970576298835609rem; --distance:7.994024005753889rem; --position:55.469009361643536%; --time:3.946552047552009s; --delay:-2.9411111007380963s;"></div>
        <div class="bubble" style="--size:4.23240235355583rem; --distance:9.88283779875142rem; --position:94.76634360317375%; --time:3.5131958079977323s; --delay:-2.724853563341809s;"></div>
        <div class="bubble" style="--size:2.657811983268397rem; --distance:7.8781852999644695rem; --position:80.48550176244223%; --time:3.1971190348191407s; --delay:-2.1186281003996896s;"></div>
        <div class="bubble" style="--size:5.042550721536238rem; --distance:6.424826544987336rem; --position:23.514103527008125%; --time:3.8146137456973768s; --delay:-3.162358819336377s;"></div>
        <div class="bubble" style="--size:4.630570808120547rem; --distance:8.690533430568523rem; --position:56.58246872735436%; --time:3.17774360405873s; --delay:-2.367820790522145s;"></div>
        <div class="bubble" style="--size:4.648017437530591rem; --distance:7.154225259461293rem; --position:29.642462220250714%; --time:3.9759089701513446s; --delay:-3.890970794945333s;"></div>
        <div class="bubble" style="--size:5.636810254543716rem; --distance:9.76406617867417rem; --position:69.33498951279992%; --time:3.9761587687969757s; --delay:-2.9787681524385943s;"></div>
        <div class="bubble" style="--size:5.70427151891667rem; --distance:7.205716545582253rem; --position:82.61974887015576%; --time:2.365850366726042s; --delay:-3.165295705280953s;"></div>
        <div class="bubble" style="--size:2.6002429082762806rem; --distance:8.980762030046161rem; --position:31.597353018006956%; --time:2.4073295293344166s; --delay:-3.0500452289435227s;"></div>
        <div class="bubble" style="--size:2.458491651479851rem; --distance:8.490658291315043rem; --position:20.849880180815013%; --time:2.7904936730652325s; --delay:-2.5299744855733244s;"></div>
        <div class="bubble" style="--size:2.8490472150590715rem; --distance:9.245864261385396rem; --position:20.089469435161412%; --time:3.998597392861768s; --delay:-2.6487249347586945s;"></div>
        <div class="bubble" style="--size:4.371125331350049rem; --distance:9.862621881044092rem; --position:56.9345454556785%; --time:3.287341777067548s; --delay:-2.6792021711186034s;"></div>
        <div class="bubble" style="--size:3.160213337214919rem; --distance:6.81115302322063rem; --position:97.50895797965237%; --time:3.900132222388289s; --delay:-2.7241092333893433s;"></div>
        <div class="bubble" style="--size:2.24749070463168rem; --distance:7.227712210118632rem; --position:61.39740400644067%; --time:3.6466610495160077s; --delay:-2.490806928433603s;"></div>
        <div class="bubble" style="--size:3.348145832071042rem; --distance:8.38627859974969rem; --position:17.56258482275762%; --time:3.723614641115862s; --delay:-2.075033397907686s;"></div>
        <div class="bubble" style="--size:4.900156700238484rem; --distance:6.207832212180514rem; --position:55.30052236140711%; --time:2.920455445338352s; --delay:-3.8454978668513236s;"></div>
        <div class="bubble" style="--size:3.353744416117893rem; --distance:7.6391495810637275rem; --position:11.246196250356423%; --time:2.3186288828731243s; --delay:-3.2629155336210993s;"></div>
        <div class="bubble" style="--size:4.651032985691054rem; --distance:7.142600180915272rem; --position:52.61849213531873%; --time:2.633408216918536s; --delay:-3.8123968103590755s;"></div>
        <div class="bubble" style="--size:3.0328430923789815rem; --distance:6.219843231077795rem; --position:41.071188073708264%; --time:2.471652114264133s; --delay:-3.1516024507614984s;"></div>
        <div class="bubble" style="--size:2.144113849861804rem; --distance:7.4634541421540455rem; --position:93.47523646039446%; --time:3.690548987038004s; --delay:-3.0828229708996324s;"></div>
        <div class="bubble" style="--size:2.033232362666533rem; --distance:8.55030258653209rem; --position:53.7958416893585%; --time:3.540306552100447s; --delay:-3.7817744407100813s;"></div>
        <div class="bubble" style="--size:4.924951363439365rem; --distance:7.264156847759914rem; --position:38.91606819206115%; --time:3.699983342821748s; --delay:-2.936854787432547s;"></div>
        <div class="bubble" style="--size:3.6508897689322133rem; --distance:9.893826915813772rem; --position:98.44675914166149%; --time:2.4958923374748223s; --delay:-3.194100461081631s;"></div>
        <div class="bubble" style="--size:2.6113679418475098rem; --distance:7.419102618777389rem; --position:7.770042583279038%; --time:2.383680692375184s; --delay:-2.2523982645174443s;"></div>
        <div class="bubble" style="--size:5.230338036891905rem; --distance:7.563359996283395rem; --position:47.77306551224634%; --time:2.222617390222151s; --delay:-3.6402706423389417s;"></div>
        <div class="bubble" style="--size:3.024726175001959rem; --distance:6.633297787795673rem; --position:69.84782762111573%; --time:2.0939201216200813s; --delay:-3.957285010013652s;"></div>
        <div class="bubble" style="--size:5.1723757936091665rem; --distance:8.775089979371366rem; --position:29.72808339076473%; --time:3.8486218581332987s; --delay:-2.664271810366664s;"></div>
        <div class="bubble" style="--size:4.722906633958508rem; --distance:6.931309062672989rem; --position:77.14043723773145%; --time:3.0614750417207444s; --delay:-3.4953185390373878s;"></div>
        <div class="bubble" style="--size:3.621411501414393rem; --distance:8.666712496492753rem; --position:53.30335762140574%; --time:2.152652083493914s; --delay:-2.1998564132323097s;"></div>
        <div class="bubble" style="--size:2.58640631958645rem; --distance:6.032059785197396rem; --position:81.55925305877406%; --time:2.0588092328699146s; --delay:-3.0304790260987833s;"></div>
        <div class="bubble" style="--size:4.854726886043222rem; --distance:9.824313047494513rem; --position:62.652543284996995%; --time:2.6808105098001067s; --delay:-2.42444347963702s;"></div>
        <div class="bubble" style="--size:4.5242422837617rem; --distance:9.1950594701527rem; --position:20.970776680692808%; --time:3.255490855054244s; --delay:-3.9741490785513993s;"></div>
        <div class="bubble" style="--size:2.500985376675448rem; --distance:8.621678105389565rem; --position:13.23913390919985%; --time:3.631457892627676s; --delay:-2.962486864604891s;"></div>
        <div class="bubble" style="--size:2.072688429208058rem; --distance:9.873848215627461rem; --position:-2.7194624290993086%; --time:3.6218383882498673s; --delay:-3.7832875685579177s;"></div>
        <div class="bubble" style="--size:3.3742930818033594rem; --distance:6.435793236501872rem; --position:32.15211645894209%; --time:3.398023127930319s; --delay:-3.970495485459275s;"></div>
        <div class="bubble" style="--size:3.7470899244885008rem; --distance:7.456744579266456rem; --position:45.338953834809395%; --time:2.1435196942276695s; --delay:-3.3535441851456484s;"></div>
        <div class="bubble" style="--size:2.6129386874675173rem; --distance:8.794229136186456rem; --position:12.949704033060641%; --time:3.317830372355657s; --delay:-3.617951704603841s;"></div>
        <div class="bubble" style="--size:5.208013376042921rem; --distance:7.677571969254417rem; --position:86.31038298837859%; --time:3.978272500346313s; --delay:-2.0693357301895894s;"></div>
        <div class="bubble" style="--size:2.003287773246991rem; --distance:6.887865156349554rem; --position:74.86702984860872%; --time:3.273619445070573s; --delay:-3.473522341136363s;"></div>
        <div class="bubble" style="--size:3.7621485877212475rem; --distance:7.966697546692181rem; --position:89.34045341093264%; --time:2.562765581856809s; --delay:-2.2539972542011064s;"></div>
        <div class="bubble" style="--size:3.3858745219516893rem; --distance:8.289473339049065rem; --position:8.754378633289164%; --time:3.7672913826059338s; --delay:-2.6967596068099535s;"></div>
        <div class="bubble" style="--size:4.243128397667714rem; --distance:7.957901321221796rem; --position:40.40781936450087%; --time:2.4979653762355887s; --delay:-2.5121124010647446s;"></div>
        <div class="bubble" style="--size:4.160052277262554rem; --distance:8.408872279514942rem; --position:17.891836885987026%; --time:2.2655085460865547s; --delay:-3.007463593320582s;"></div>
        <div class="bubble" style="--size:5.864830654707823rem; --distance:8.01481960596736rem; --position:85.1167334746317%; --time:3.1200034302575195s; --delay:-3.597338574531314s;"></div>
        <div class="bubble" style="--size:5.858799796314097rem; --distance:8.62705687179306rem; --position:10.860992971324752%; --time:2.3749095529394277s; --delay:-2.881817217726603s;"></div>
        <div class="bubble" style="--size:5.687909459964014rem; --distance:6.571689949014646rem; --position:101.6317261381559%; --time:3.5194793033935707s; --delay:-2.2249608399467182s;"></div>
        <div class="bubble" style="--size:4.0633684894682345rem; --distance:7.275950807007551rem; --position:68.61190850218165%; --time:3.8803758717034804s; --delay:-2.877584259680723s;"></div>
        <div class="bubble" style="--size:3.7044858596240697rem; --distance:8.718973970515444rem; --position:69.21885704878585%; --time:3.0532721322089706s; --delay:-3.546478733044624s;"></div>
        <div class="bubble" style="--size:3.254698789549403rem; --distance:8.698169814549296rem; --position:13.76850873430427%; --time:3.7124114895239146s; --delay:-3.8795933723863443s;"></div>
        <div class="bubble" style="--size:5.623090647673359rem; --distance:9.948493442979434rem; --position:93.39821456171644%; --time:3.3182417610365933s; --delay:-2.5600333324871727s;"></div>
        <div class="bubble" style="--size:3.9793079229968322rem; --distance:8.572145755619276rem; --position:45.86983967346504%; --time:2.037013015018213s; --delay:-3.8828326499754637s;"></div>
        <div class="bubble" style="--size:3.8476226395248228rem; --distance:9.011853352172153rem; --position:45.25445978350844%; --time:3.455796493571442s; --delay:-3.564527041166697s;"></div>
        <div class="bubble" style="--size:5.568770688866664rem; --distance:7.117950639980559rem; --position:64.30367125679645%; --time:2.398674687148403s; --delay:-3.5691132102453964s;"></div>
        <div class="bubble" style="--size:2.216791374025062rem; --distance:9.19408275452508rem; --position:13.82787236173252%; --time:2.112791756011827s; --delay:-2.7549720454127042s;"></div>
        <div class="bubble" style="--size:4.399180872838877rem; --distance:8.780565397540762rem; --position:73.35296248760183%; --time:2.25208119294888s; --delay:-2.1135767927210516s;"></div>
        <div class="bubble" style="--size:2.2045493793765543rem; --distance:9.532879772627311rem; --position:-3.782915806838316%; --time:3.394902067506235s; --delay:-2.219598692153058s;"></div>
        <div class="bubble" style="--size:3.6006316112398373rem; --distance:7.447604728504406rem; --position:101.37613513507712%; --time:3.374411349045125s; --delay:-3.034434761925556s;"></div>
        <div class="bubble" style="--size:5.083071676708287rem; --distance:7.217065358280445rem; --position:22.103274930995525%; --time:2.0424066703796044s; --delay:-3.834391311464047s;"></div>
        <div class="bubble" style="--size:4.155937862308417rem; --distance:6.305924625396136rem; --position:74.7849899962346%; --time:2.511393050951259s; --delay:-2.274746622838284s;"></div>
        <div class="bubble" style="--size:3.3845373294590555rem; --distance:6.231089810816879rem; --position:31.889959755448032%; --time:3.489865040070906s; --delay:-3.962921872883391s;"></div>
        <div class="bubble" style="--size:3.0507564671377487rem; --distance:9.469841194216393rem; --position:42.148826524500755%; --time:3.1652555824722506s; --delay:-3.931626334446347s;"></div>
        <div class="bubble" style="--size:4.267411684660274rem; --distance:7.97058205350899rem; --position:74.49802719993937%; --time:2.8228620722023603s; --delay:-3.174293821793459s;"></div>
        <div class="bubble" style="--size:2.256625621464867rem; --distance:9.711726389238736rem; --position:2.4564435147308235%; --time:3.40712649448784s; --delay:-3.8613835079861945s;"></div>
        <div class="bubble" style="--size:5.491007576128541rem; --distance:6.43364056000176rem; --position:32.64108100585927%; --time:3.770511790153649s; --delay:-2.346919202589531s;"></div>
        <div class="bubble" style="--size:5.250260410392776rem; --distance:6.125324227662897rem; --position:90.59128079148893%; --time:3.2686277516797304s; --delay:-2.834474107970364s;"></div>
        <div class="bubble" style="--size:5.97787342621788rem; --distance:8.05533795023497rem; --position:35.277120354713475%; --time:3.1141351989529036s; --delay:-2.210510782025632s;"></div>
        <div class="bubble" style="--size:5.748316041294795rem; --distance:7.540150924642234rem; --position:24.816714044482634%; --time:3.9077648704556642s; --delay:-3.6950980216979934s;"></div>
        <div class="bubble" style="--size:4.931319518625515rem; --distance:9.894594479610456rem; --position:100.31526433955914%; --time:2.8229266154095924s; --delay:-3.3025794578420844s;"></div>
      </div>
      <div class="content">
        <div>
          <div><b>Eldew</b><a href="#">Secuce</a><a href="#">Drupand</a><a href="#">Oceash</a><a href="#">Ugefe</a><a href="#">Babed</a></div>
          <div><b>Spotha</b><a href="#">Miskasa</a><a href="#">Agithe</a><a href="#">Scesha</a><a href="#">Lulle</a></div>
          <div><b>Chashakib</b><a href="#">Chogauw</a><a href="#">Phachuled</a><a href="#">Tiebeft</a><a href="#">Ocid</a><a href="#">Izom</a><a href="#">Ort</a></div>
          <div><b>Athod</b><a href="#">Pamuz</a><a href="#">Vapert</a><a href="#">Neesk</a><a href="#">Omemanen</a></div>
        </div>
        <div><a class="image" href="https://codepen.io/z-" target="_blank" style="background-image: url(&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/happy.svg&quot;)"></a>
          <p>©2019 Not Really</p>
        </div>
      </div>
    </div>
    <svg style="position:fixed; top:100vh">
      <defs>
        <filter id="blob">
          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob"></feColorMatrix>
          <!--feComposite(in="SourceGraphic" in2="blob" operator="atop") //After reviewing this after years I can't remember why I added this but it isn't necessary for the blob effect-->
        </filter>
      </defs>
    </svg>
    <!-- partial -->

    </body>





























<!-- Footer -->
{{-- <footer class="bg-dark text-center text-white mt-">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          >
          <i class="fa-brands fa-facebook"></i>
    </a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->

      <!-- Section: Form -->
      <section class="">

      </section>
      <!-- Section: Form -->

      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
          repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
          eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
      </section>
      <!-- Section: Text -->

      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>

            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>

            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>

            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->


</body> --}}
