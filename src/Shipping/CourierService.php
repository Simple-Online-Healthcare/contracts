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

    /**
     * Request the tracking history by the tracking number.
     *
     * @param string $trackingNumber
     *
     * @return array
     */
    public function track(string $trackingNumber): array;
}
