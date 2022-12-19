<?php

namespace SimpleOnlineHealthcare\Contracts\Shipping;

interface CourierService
{
    /**
     * Sends the order through the chosen courier.
     * Returns the order ID, tracking number and label or failure reason.
     *
     * @param OrderShipment $orderShipment
     *
     * @return ShipmentResult
     */
    public function send(OrderShipment $orderShipment): ShipmentResult;
}
