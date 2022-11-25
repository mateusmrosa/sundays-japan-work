<?php

/**import do phpmailer */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/**import do phpmailer */

/**import do autoload para envio de email */
require '../vendor/autoload.php';
/**import do autoload para envio de email */

/**import da classe funcoes */
require_once('../util/Funcoes.php');
/**import da classe funcoes */

$funcoes = new Funcoes();
$array = array(
    "dataEmbarque"             => $funcoes::formatarDataBR($_POST['dataEmbarque']),
    "nome"                     => $_POST['nome'],
    "checkBoxFinanceiro"       => isset($_POST["checkBoxFinanceiro"]) ? $_POST['checkBoxFinanceiro'] : null,
    "checkBoxCultural"         => isset($_POST["checkBoxCultural"]) ? $_POST["checkBoxCultural"] : null,
    "especifique"              => isset($_POST["especifique"]) ? $_POST["especifique"] : "",
    "checkBoxMasculino"        => isset($_POST["checkBoxMasculino"]) ? $_POST['checkBoxMasculino'] : null,
    "checkBoxFeminino"         => isset($_POST["checkBoxFeminino"]) ? $_POST["checkBoxFeminino"] : null,
    "idade"                    => $_POST['idade'],
    "descendencia"             => $_POST['descendencia'],
    "rua"                      => $_POST['rua'],
    "cep"                      => $_POST['cep'],
    "cidade"                   => $_POST['cidade'],
    "estado"                   => $_POST['estado'],
    "telefone"                 => $_POST['telefone'],
    "email"                    => $_POST['email'],
    "rg"                       => $_POST['rg'],
    "cpf"                      => $_POST['cpf'],
    "dataNascimento"           => $funcoes::formatarDataBR($_POST['dataNascimento']),
    "estadoCivil"              => $_POST['estadoCivil'],
    "tempoCasado"              => $_POST['tempoCasado'],
    "nomeConjuge"              => $_POST['nomeConjuge'],
    "filhos"                   => $_POST['filhos'],
    "qtdeFilhos"               => $_POST['qtdeFilhos'],
    "idadeFilhos"              => isset($_POST["idadeFilhos"]) ? $_POST['idadeFilhos'] : null,
    "pretendeLevalos"          => $_POST['pretendeLevalos'],
    "visto"                    => $_POST['visto'],
    "validadeASolicJaComVisto" => $funcoes::formatarDataBR($_POST['validadeASolicJaComVisto']),
    "situacao"                 => $_POST['situacao'],
    "validadeEmAndaReentrada"  => $funcoes::formatarDataBR($_POST['validadeEmAndaReentrada']),
    "situacaoIsseiPerma"       => $_POST['situacaoIsseiPerma'],
    "validadeIsseiPerma"       => $funcoes::formatarDataBR($_POST['validadeIsseiPerma']),
    "situacaoDuplaPass"        => $_POST['situacaoDuplaPass'],
    "validadeDuplaPass"        => $funcoes::formatarDataBR($_POST['validadeDuplaPass']),
    "nomeDoPai"                => $_POST['nomeDoPai'],
    "nomeDaMae"                => $_POST['nomeDaMae'],
    "alturaEmCm"               => $_POST['alturaEmCm'],
    "peso"                     => $_POST['peso'],
    "calcado"                  => $_POST['calcado'],
    "pressao"                  => $_POST['pressao'],
    "tatuagem"                 => $_POST['tatuagem'],
    "tatooVisivel"             => $_POST['tatooVisivel'],
    "ondeTatuagem"             => $_POST['ondeTatuagem'],
    "visao"                    => $_POST['visao'],
    "usaOculos"                => $_POST['usaOculos'],
    "outrosEspecifiqueVisao"   => $_POST['outrosEspecifiqueVisao'],
    "linguaJaponesaFala"       => $_POST['linguaJaponesaFala'],
    "linguaJaponesaEntende"    => $_POST['linguaJaponesaEntende'],
    "mas"                      => $_POST['mas'],
    "linguaJaponesaEscreve"    => $_POST['linguaJaponesaEscreve'],
    "cartaMotorista"           => $_POST['cartaMotorista'],
    "cartaMotoOnde"            => $_POST['cartaMotoOnde'],
    "outrosCertificados"       => $_POST['outrosCertificados'],
    "andaBicicleta"            => $_POST['andaBicicleta'],
);

// var_dump($array);

if ($array['checkBoxFinanceiro'] == 'on')
    $motivoViagem = 'Financeiro';
else
    $motivoViagem = 'Cultural';

if ($array['checkBoxMasculino'] == 'on')
    $sexo = 'Masculino';
else
    $sexo = 'Ferminino';

try {
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    // $mail->SMTPDebug = 1; 
    $mail->Host       = 'smtp.mailtrap.io';
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username   = '56e2ef249902d4';
    $mail->Password   = '7901837cc3790b';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 2525;

    $mail->setFrom('teste@sundays.com.br', 'Sundays');
    $mail->addAddress("teste@sundays.com.br", "Sundays");

    $mail->isHTML(true);
    $mail->Subject = 'Email com Curriculum de pretendente de viagem';
    $mail->Body    = '<div style="font-family: Montserrat; text-align: center;"> 

        Curriculum preenchido no site Sundays Japan Work

                    </div> 
                    <div>
                        <p><b>Data de embarque: </b>                      ' . $array['dataEmbarque'] . '</p>
                        <p><b>Nome: </b>                                  ' . $array['nome']         . '</p>
                        <p><b>Motivo da viagem: </b>                      ' . $motivoViagem          . '</p>
                        <p><b>Especifique: </b>                           ' . $array['especifique']  . '</p>
                        <p><b>Sexo: </b>                                  ' . $sexo                  . '</p>
                        <p><b>Idade: </b>                                 ' . $array['idade']        . '</p>
                        <p><b>Descendencia: </b>                          ' . $array['descendencia'] . '</p>
                        <p><b>Rua: </b>                                   ' . $array['rua'] . '</p>
                        <p><b>Cep: </b>                                   ' . $array['cep'] . '</p>
                        <p><b>Cidade: </b>                                ' . $array['cidade'] . '</p>
                        <p><b>Estado: </b>                                ' . $array['estado'] . '</p>
                        <p><b>Telefone: </b>                              ' . $array['telefone'] . '</p>
                        <p><b>Email: </b>                                 ' . $array['email'] . '</p>
                        <p><b>RG: </b>                                    ' . $array['rg'] . '</p>
                        <p><b>CPF: </b>                                   ' . $array['cpf'] . '</p>
                        <p><b>DataNascimento: </b>                        ' . $array['dataNascimento'] . '</p>
                        <p><b>Estado Civil: </b>                          ' . $array['estadoCivil'] . '</p>
                        <p><b>Tempo de Casado: </b>                       ' . $array['tempoCasado'] . '</p>
                        <p><b>Nome Conjuge: </b>                          ' . $array['nomeConjuge'] . '</p>
                        <p><b>Filhos: </b>                                ' . $array['filhos'] . '</p>
                        <p><b>Quantidade de Filhos: </b>                  ' . $array['qtdeFilhos'] . '</p>
                        <p><b>Idade Filhos: </b>                          ' . $array['idadeFilhos'] . '</p>
                        <p><b>Pretende leva-los: </b>                     ' . $array['pretendeLevalos'] . '</p>
                        <p><b>Visto: </b>                                 ' . $array['visto'] . '</p>
                        <p><b>Validade: </b>                              ' . $array['validadeASolicJaComVisto'] . '</p>
                        <p><b>Situacao: </b>                              ' . $array['situacao'] . '</p>
                        <p><b>Validade: </b>                              ' . $array['validadeEmAndaReentrada'] . '</p>
                        <p><b>Situação: </b>                              ' . $array['situacaoIsseiPerma'] . '</p>
                        <p><b>Validade: </b>                              ' . $array['validadeIsseiPerma'] . '</p>
                        <p><b>Situação: </b>                              ' . $array['situacaoDuplaPass'] . '</p>
                        <p><b>Validade: </b>                              ' . $array['validadeDuplaPass'] . '</p>
                        <p><b>Nome do pai: </b>                           ' . $array['nomeDoPai'] . '</p>
                        <p><b>Nome do mãe: </b>                           ' . $array['nomeDaMae'] . '</p>
                        <p><b>Altura em CM: </b>                          ' . $array['alturaEmCm'] . '</p>
                        <p><b>Peso: </b>                                  ' . $array['peso'] . '</p>
                        <p><b>Calçado: </b>                               ' . $array['calcado'] . '</p>
                        <p><b>Pressão Arterial: </b>                      ' . $array['pressao'] . '</p>
                        <p><b>Tem tatuagem: </b>                          ' . $array['tatuagem'] . '</p>
                        <p><b>Tatuagem Visível: </b>                      ' . $array['tatooVisivel'] . '</p>
                        <p><b>Local da Tatuagem: </b>                     ' . $array['ondeTatuagem'] . '</p>
                        <p><b>Tem algum problema de visão: </b>           ' . $array['visao'] . '</p>
                        <p><b>Usa Óculos: </b>                            ' . $array['usaOculos'] . '</p>
                        <p><b>Especifique outros problemas de visão: </b> ' . $array['outrosEspecifiqueVisao'] . '</p>
                        <p><b>Fala em japonês: </b>                       ' . $array['linguaJaponesaFala'] . '</p>
                        <p><b>Entende em japonês: </b>                    ' . $array['linguaJaponesaEntende'] . '</p>
                        <p><b>Mas: </b>                                   ' . $array['mas'] . '</p>
                        <p><b>Escreve em japonês: </b>                    ' . $array['linguaJaponesaEscreve'] . '</p>
                        <p><b>Carteira de motorista: </b>                 ' . $array['cartaMotorista'] . '</p>
                        <p><b>Onde: </b>                                  ' . $array['cartaMotoOnde'] . '</p>
                        <p><b>Outros Certificados: </b>                   ' . $array['outrosCertificados'] . '</p>
                        <p><b>Anda de bicicleta: </b>                     ' . $array['andaBicicleta'] . '</p>
                    </div>
                    ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'ok';

    // return true;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
