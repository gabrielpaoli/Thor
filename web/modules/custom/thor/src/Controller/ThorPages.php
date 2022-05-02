<?php

namespace Drupal\thor\Controller;

use Drupal\Core\Controller\ControllerBase;

class ThorPages extends ControllerBase {

  public function homepage(): array {
    $homepageButtons = [
      'createPedido' => [
        'text' => 'Crear Pedido',
        'link' => '/node/add/pedido'
      ],
      'showPedidos' => [
        'text' => 'Mostrar pedidos',
        'link' => '/pedidos'
      ],
      'showProductos' => [
        'text' => 'Mostrar productos',
        'link' => '/productos'
      ]
    ];

    return [
      '#theme' => 'homepage_theme',
      '#data' => $homepageButtons,
    ];
  }


}
