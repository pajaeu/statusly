<?php

namespace App\Enums;

enum ServiceStatus: string
{

	case OPERATIONAL = 'operational';
	case MAINTENANCE = 'maintenance';
	case DOWN = 'down';
}