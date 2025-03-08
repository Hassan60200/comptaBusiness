<?php

namespace App\Enum;

enum InvoiceStatus: string
{
    case PENDING = 'pending';   // Facture en attente de paiement
    case PAID = 'paid';         // Facture payée
    case CANCELED = 'canceled'; // Facture annulée
}
