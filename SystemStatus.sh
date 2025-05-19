#!/bin/bash

# Obtener uso de CPU
cpu_usage=$(top -bn2 | grep "Cpu(s)" | tail -n1 | awk '{print 100 - $8}')

# Obtener temperatura de los núcleos
cpu_temp=$(sensors | grep -m 1 "Core 0" | awk '{print $3}' | tr -d '+°C')

# Obtener tráfico de red inicial
read rx1 tx1 < <(awk '/:/ {if($1 != "lo:") {split($2, a); split($10, b); print a[1], b[1]}}' /proc/net/dev | head -n1)

sleep 1

# Obtener tráfico de red después de 1 segundo
read rx2 tx2 < <(awk '/:/ {if($1 != "lo:") {split($2, a); split($10, b); print a[1], b[1]}}' /proc/net/dev | head -n1)

# Calcular diferencia
rx_diff=$((rx2 - rx1))
tx_diff=$((tx2 - tx1))

echo "${cpu_usage}, ${cpu_temp}, ${tx_diff}, ${rx_diff}"
