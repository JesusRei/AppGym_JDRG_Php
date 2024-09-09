<?php

namespace APPGYM_JDRG_PHP\Controllers;

use APPGYM_JDRG_PHP\Models\UserGym;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
use Dompdf\Dompdf;
use Dompdf\Options;

class GymController
{
    //Attributes
    private $jsonFile;

    //Magic Methods
    public function __construct($jsonFile)
    {
        $this->jsonFile = $jsonFile;
    }

    public function readJsonFile()
    {
        return json_decode(file_get_contents($this->jsonFile), true);
    }

    public function addRegister($UserGym)
    {
        $registers = $this->readJsonFile();
        $registers[] = $UserGym->toArray();
        file_put_contents($this->jsonFile, json_encode($registers));
        $this->welcomeEmail($UserGym);
        $this->generatePdf($UserGym);
    }

    public function welcomeEmail(UserGym $UserGym)
    {
        $transport = Transport::fromDsn('smtp://900fcd083c89ab:7bb2b81339ee14@sandbox.smtp.mailtrap.io:2525');
        $mailer = new Mailer($transport);

        $email = (new Email())
            ->from('jesus.reinoso27587@ucaldas.edu.co')
            ->to(' ' . $UserGym->getEmail())
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('¡Bienvenido!')
            ->text('A partir de ahora, eres parte de nuestra comunidad y estamos comprometidos a ayudarte a alcanzar tus objetivos de fitness.!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);
    }

    public function generatePdf(UserGym $userGym)
    {
        // Configuración de dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);

        // Contenido HTML para el PDF
        $html = $this->generatePdfHtml($userGym);

        // Cargar HTML al dompdf
        $dompdf->loadHtml($html);

        // (Opcional) Establecer tamaño y orientación del papel
        $dompdf->setPaper('letter', 'portrait');

        // Renderizar el PDF (Salida al navegador o guardado en archivo)
        $dompdf->render();
        $dompdf->stream("plan_de_entrenamiento.pdf", ["Attachment" => true]);
    }

    public function generatePdfHtml(UserGym $userGym)
    {
        // Generar HTML para el PDF
        return '
            <html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                    }
                    .container {
                        width: 80%;
                        margin: 0 auto;
                    }
                    h1 {
                        text-align: center;
                    }
                    p {
                        margin-bottom: 1rem;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <h1>Plan de Entrenamiento</h1>
                    <p><strong>Nombre:</strong> ' . htmlspecialchars($userGym->getName()) . '</p>
                    <p><strong>Edad:</strong> ' . htmlspecialchars($userGym->getAge()) . ' años</p>
                    <p><strong>Género:</strong> ' . htmlspecialchars($userGym->getGender()) . '</p>
                     <p><strong>Peso:</strong> ' . htmlspecialchars($userGym->getWeight()) . ' kg</p>
                    <p><strong>Altura:</strong> ' . htmlspecialchars($userGym->getHeight()) . ' m</p>
                    <p><strong>IMC:</strong> ' . htmlspecialchars($userGym->getImc()) . '</p>
                    <p><strong>Horas de Entrenamiento Semanal:</strong> ' . htmlspecialchars($userGym->getHoursTraining()) . '</p>
                    
                    <h2>Plan Semanal Estandar</h2>
    
                    <h3>Lunes:</h3>
                    <ul>
                        <li><strong>Calentamiento:</strong> 10 minutos de trote ligero</li>
                        <li><strong>Ejercicio 1:</strong> Sentadillas - 3 series de 12 repeticiones</li>
                        <li><strong>Ejercicio 2:</strong> Press de banca - 3 series de 10 repeticiones</li>
                        <li><strong>Ejercicio 3:</strong> Remo con barra - 3 series de 12 repeticiones</li>
                        <li><strong>Enfriamiento:</strong> Estiramientos - 5 minutos</li>
                    </ul>

                    <h3>Martes:</h3>
                    <ul>
                        <li><strong>Calentamiento:</strong> 5 minutos de salto de cuerda</li>
                        <li><strong>Ejercicio 1:</strong> Curl de bíceps con mancuernas - 3 series de 15 repeticiones</li>
                        <li><strong>Ejercicio 2:</strong> Extensiones de tríceps - 3 series de 15 repeticiones</li>
                        <li><strong>Ejercicio 3:</strong> Abdominales - 3 series de 20 repeticiones</li>
                        <li><strong>Enfriamiento:</strong> Estiramientos - 5 minutos</li>
                    </ul>

                    <h3>Miércoles:</h3>
                    <ul>
                        <li><strong>Calentamiento:</strong> 10 minutos de caminata rápida</li>
                        <li><strong>Ejercicio 1:</strong> Prensa de piernas - 3 series de 12 repeticiones</li>
                        <li><strong>Ejercicio 2:</strong> Elevaciones de talones - 3 series de 15 repeticiones</li>
                        <li><strong>Ejercicio 3:</strong> Flexiones de pecho - 3 series de 10 repeticiones</li>
                        <li><strong>Enfriamiento:</strong> Estiramientos - 5 minutos</li>
                    </ul>

                    <h3>Jueves:</h3>
                    <ul>
                        <li><strong>Calentamiento:</strong> 10 minutos de bicicleta estática</li>
                        <li><strong>Ejercicio 1:</strong> Pull-ups (dominadas) - 3 series de 8 repeticiones</li>
                        <li><strong>Ejercicio 2:</strong> Press militar - 3 series de 12 repeticiones</li>
                        <li><strong>Ejercicio 3:</strong> Crunches - 3 series de 20 repeticiones</li>
                        <li><strong>Enfriamiento:</strong> Estiramientos - 5 minutos</li>
                    </ul>

                    <h3>Viernes:</h3>
                    <ul>
                        <li><strong>Calentamiento:</strong> 5 minutos de trote suave</li>
                        <li><strong>Ejercicio 1:</strong> Peso muerto - 3 series de 10 repeticiones</li>
                        <li><strong>Ejercicio 2:</strong> Fondos en paralelas - 3 series de 10 repeticiones</li>
                        <li><strong>Ejercicio 3:</strong> Remo con mancuernas - 3 series de 12 repeticiones</li>
                        <li><strong>Enfriamiento:</strong> Estiramientos - 5 minutos</li>
                    </ul>

                    <h2>Notas Adicionales</h2>
                    <p><strong>Hidratación:</strong> Asegúrate de beber suficiente agua antes, durante y después del entrenamiento.</p>
                    <p><strong>Nutrición:</strong> Considera seguir un plan de nutrición balanceado que complemente tu régimen de entrenamiento.</p>
                    <p><strong>Descanso:</strong> Escucha a tu cuerpo y asegúrate de descansar adecuadamente para evitar lesiones.</p>
                                </div>
                            </body>
                            </html>
        ';
    }
}
