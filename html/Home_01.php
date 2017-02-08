<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home_01
 *
 * @author Ivan
 */
class Home_01
{

    public function show()
    {
        $htm = $this->showHeader().$this->showQuadro01().$this->showQuadro02()
            .$this->showQuadro03().$this->showQuadro04().$this->showQuadro05();
        echo $htm;
    }

    protected function showHeader()
    {
        $htm = <<<EOD
         <div class="container"><!-- CONTAINER-->

            <section class="row" id="header-master"><!-- HEADER MASTER-->
                <div class="col-md-12">
                    <header>
                        <hgroup>
                            <h1 style="color: #FFF;">Oportunidade ÚNICA!</h1>
                        </hgroup>
                    </header>
                </div>
            </section><!-- HEADER MASTER-->
EOD;
        return $htm;
    }

    protected function showQuadro01()
    {
        $htm = <<<EOD
         <section class="row" id="content"><!-- CONTENT-->
                <div class="col-md-12" id="quadro1">
                    <p>Não sei quem você é, e nem quão fundo você está no poço financeiro.
                        Porém uma coisa eu tenho certeza. Eu já estive onde você está.</p>
                    <p>Estamos passando por tempos de escassez na economia nacional e
                        isso tem deixado grandes pessoas, trabalhadoras e dedicadas em mas lençóis,
                        financeiramente falando.</p>
                    <p>Antes que aprofundemos mais no assunto, deixa eu esclarecer o primeiro ponto.
                        Não tenho fórmula mágica de enriquecimento. Porém, caso você seja qualificado
                        entre o perfil de pessoa que procuramos, você terá a oportunidade de ter uma
                        vida digna e um futuro tranquilo financeiramente, com a nossa proposta de trabalho.
                        Marque bem essa palavra, <strong>TRABALHO</strong>.</p>

                        <a class="btn btn-primary" href="#quadro5">FAZER CADASTRO</a>
                </div>
EOD;
        return $htm;
    }

    protected function showQuadro02()
    {
        $htm = <<<EOD
        <div class="col-md-12" id="quadro2">
                    <h1><strong>Perguntas importantes</strong></h1>
                    <ul>
                        <li>Você tem um grande sonho a realizar?</li>
                        <li>Sua forma de vida atual permitirá você realizar esse sonho em um futuro próximo?</li>
                        <li>Você estaria disposto a trabalhar fortemente algumas horas semanais se isso pudesse
                            lhe proporcionar a realização do seu grande sonho?</li>

                    </ul>
       </div>
EOD;
        return $htm;
    }

    protected function showQuadro03()
    {
        $htm = <<<EOD
          <div class="col-md-12" id="quadro3">
                    <h1><strong>Respostas importantes</strong></h1>
                    <p>Nós podemos lhe oferecer a oportunidade para realizar seu sonho, caso esteja disposto a se dedicar algumas horas semanais
                        intensamente, ainda que você já tenha um emprego ou trabalho fixo.</p>
          </div>
EOD;

        return $htm;
    }

    protected function showQuadro04()
    {
        $htm = <<<EOD
        <div class="col-md-12" id="quadro4">
                    <h1><strong>IMPORTANTE!</strong></h1>
                    <p>Essa oportunidade é realmente única, e nossa equipe é limitada. Por mais que possa parecer que quanto mais melhor,
                        e realmente é, mas nesse momento estamos procurando empreendedores, pessoas especiais as quais vamos dedicar
                        pessoalmente ao treinamento e preparação para fazer um trabalho profissional e obter lucro como profissionais.</p>
                    <p>
                        Caso você se enquadre no perfil que procuramos, cadastre-se abaixo. A quantidade de pessoas é limitada,
                        e o tempo para sua região é limitado.
                    </p>
                    <p>
                        Fazendo seu cadastro, estaremos dando mais informações e fazendo visitas para apresentar a empresa e o plano de trabalho para essa equipe.
                    </p>
                    <p>Agora só depende de você! Caso se julgue capaz de se dedicar, aprender e trabalhar, nós temos certeza que, alguém com seu perfil, pode
                        ser muito bem-sucedido(a) no grupo empresarial que fazemos parte.</p>
                </div>

EOD;
        return $htm;
    }

    protected function showQuadro05()
    {
        $htm = <<<EOD
        <div class="col-md-12" id="quadro5">
                  
            <div class="jumbotron">
                <div class="alert alert-info text-center" role="alert">CADASTRE-SE</div>

                        <blockquote>
                            <p>As oportunidades são como o nascer do Sol: se você esperar demais, vai perdê-las.</p>
                            <footer>William Arthur Ward</footer>
                        </blockquote>
                        <form class="form-inline" name="form_01" method="post" action="index.php">
                            <div class="form-group">
                                <label class="sr-only" for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="required">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"  placeholder="Email" required="required">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="celular">Celular</label>
                                <input type="tel" class="form-control" id="celular" name="celular"  placeholder="DDD + celular" required="required">
                            </div>

                            <button type="submit" class="btn btn-large btn-success" id="btn_submit">Eu quero</button>
                        </form>
                    </div>
                  </div>
            </div>
                    
    </section><!-- CONTENT-->
</div><!-- CONTAINER-->

EOD;
        return $htm;
    }
}