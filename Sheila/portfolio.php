<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Portfólio</title>        
        <?php include './referencias.php';?>
    </head>
    <body>                
        <?php include'./cabecalho.php'?>       
        <div id="section_home"></div>           
            <section>     
                <ul class="thumbs">
                    <li>
                        <a href="#thumb2" class="thumbnail" style="background-image: url('imagens/capa-portfolio/capa-croqui.jpg')">
                        <h4>Croquis</h4><span class="description">Croquis</span></a>
                    </li>
                    <li><a href="#thumb1" class="thumbnail" style="background-image: url('imagens/capa-portfolio/capa-cartoes-comemorativos.jpg')">
                        <h4>Cartões</h4><span class="description">Cartões Comemorativos</span></a>
                    </li>                    
                    <li>
                        <a href="#thumb3" class="thumbnail" style="background-image: url('imagens/capa-portfolio/capa-desenho-tecnico.jpg')">
                        <h4>Desenhos Técnicos</h4><span class="description">Desenhos Técnicos</span></a>
                    </li>
                    <li>
                        <a href="#thumb4" class="thumbnail" style="background-image: url('imagens/capa-portfolio/capa-estampa.jpg')">
                        <h4>Estampas</h4><span class="description">Estampas</span></a>
                    </li>
                    <li>
                        <a href="#thumb5" class="thumbnail" style="background-image: url('imagens/capa-portfolio/capa-infografico.jpg')">
                        <h4>Infográfico</h4><span class="description">Infográfico</span></a>
                    </li>
                    <li>
                        <a href="#thumb6" class="thumbnail" style="background-image: url('imagens/capa-portfolio/capa-material-grafico.jpg')">
                        <h4>Material Gráfico</h4><span class="description">Material Gráfico</span></a>
                    </li>
                </ul>                
                <div class="portfolio-content">
                    <div id="thumb1">
                        <div class="media"><iframe src="//player.vimeo.com/video/69666609?byline=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                        <h1>Web development</h1>
                        <div class="yoxview">
                            <a href="imagens/yoxview-gallery/original/01.jpg"><img src="imagens/yoxview-gallery/thumbnails/01.jpg" alt="First" title="The first image" /></a>
                            <a href="imagens/yoxview-gallery/original/02.jpg"><img src="imagens/yoxview-gallery/thumbnails/02.jpg" alt="First" title="The SECOND image" /></a>
                            <a href="imagens/yoxview-gallery/original/03.jpg"><img src="imagens/yoxview-gallery/thumbnails/03.jpg" alt="First" title="The THIRD image" /></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis nisi sit amet metus venenatis, ut congue turpis aliquet. Pellentesque eget elit sollicitudin, feugiat felis in, ornare diam. Morbi blandit sapien nibh, eu pulvinar tortor luctus nec. Aenean lobortis lacus cursus gravida adipiscing. Praesent in odio porta, placerat felis id, viverra est. Nam magna quam, tincidunt eget augue in, aliquet tristique ipsum.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>      
                    <div id="thumb2">
                        <div class="media"><img src="images/5454.jpg"/></div>
                        <h1>SEO</h1>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Integer a posuere tortor. Praesent malesuada mauris massa, non blandit neque tempus nec. Quisque fermentum nunc non hendrerit tempus.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                        <div class="yoxview">
                            <a href="imagens/yoxview-gallery/original/01.jpg"><img src="imagens/yoxview-gallery/thumbnails/01.jpg" alt="First" title="The first image" /></a>
                            <a href="imagens/yoxview-gallery/original/02.jpg"><img src="imagens/yoxview-gallery/thumbnails/02.jpg" alt="First" title="The SECOND image" /></a>
                            <a href="imagens/yoxview-gallery/original/03.jpg"><img src="imagens/yoxview-gallery/thumbnails/03.jpg" alt="First" title="The THIRD image" /></a>
                        </div>
                    </div>
                    <div id="thumb3">
                        <div class="media"><img src="images/media.jpg"/></div>
                        <h1>Web design</h1>
                        <p>Ut condimentum eros bibendum metus lacinia, ac condimentum justo faucibus. Nam nec dui convallis, sodales sapien in, gravida justo. Pellentesque pulvinar massa a nisl iaculis, quis iaculis elit tincidunt.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                    <div id="thumb4">
                        <div class="media"><img src="images/media.jpg"/></div>
                        <h1>Project management</h1>
                        <p>Suspendisse cursus commodo elit, at tempus felis hendrerit vel. Cras condimentum aliquam mauris at blandit. Pellentesque ac velit iaculis, lobortis nibh id, ultricies ante. Fusce vel urna justo. Maecenas rhoncus vel ligula eget feugiat. Maecenas blandit risus eros, vel imperdiet augue dapibus vitae.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                    <div id="thumb5">
                        <div class="media"><img src="images/media.jpg"/></div>
                        <h1>Graphic design</h1>
                        <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>   
                    <div id="thumb6">
                        <div class="media"><img src="images/media.jpg"/></div>
                        <h1>Graphic design</h1>
                        <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                
                <!--<div class="yoxview">
                    <a href="imagens/yoxview-gallery/original/01.jpg"><img src="imagens/yoxview-gallery/thumbnails/01.jpg" alt="First" title="The first image" /></a>
                    <a href="imagens/yoxview-gallery/original/02.jpg"><img src="imagens/yoxview-gallery/thumbnails/02.jpg" alt="First" title="The SECOND image" /></a>
                    <a href="imagens/yoxview-gallery/original/03.jpg"><img src="imagens/yoxview-gallery/thumbnails/03.jpg" alt="First" title="The THIRD image" /></a>
                </div>-->
            </section>    
        <div id="section_home"></div>
        <?php include './rodape.php';?>
    </body>
</html>