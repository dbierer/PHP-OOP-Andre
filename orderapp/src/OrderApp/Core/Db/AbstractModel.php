<?php
namespace OrderApp\Core\Db;
use OrderApp\Core\Service\Services;
/**
 * Abstract Db Class
 */
abstract class AbstractModel implements ModelInterface
{
    const ERROR_LOG = 'db_error.log';
    protected $db;

    /**
     * AbstractModel constructor.
     * @param Services $services
     */
    public function __construct(
        protected Services $services
    )
    {
        //Get the singleton PDO and cache it so all models have it.
        $this->db = $this->services->getDb();
    }
}
