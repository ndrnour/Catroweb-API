<?php
/**
 * Projects.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.36
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the Projects model.
 *
 * @author  OpenAPI Generator team
 */
class Projects
{
  /**
   * @var OpenAPI\Server\Model\Project[]|null
   * @SerializedName("projects")
   * @Assert\All({
   *     @Assert\Type("OpenAPI\Server\Model\Project")
   * })
   * @Type("array<OpenAPI\Server\Model\Project>")
   */
  protected $projects;

  /**
   * Amount of overall projects of this query not limited by limit or offset.
   *
   * @var int|null
   * @SerializedName("total_results")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $total_results;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->projects = isset($data['projects']) ? $data['projects'] : null;
    $this->total_results = isset($data['total_results']) ? $data['total_results'] : null;
  }

  /**
   * Gets projects.
   *
   * @return OpenAPI\Server\Model\Project[]|null
   */
  public function getProjects()
  {
    return $this->projects;
  }

  /**
   * Sets projects.
   *
   * @param OpenAPI\Server\Model\Project[]|null $projects
   *
   * @return $this
   */
  public function setProjects(array $projects = null)
  {
    $this->projects = $projects;

    return $this;
  }

  /**
   * Gets total_results.
   *
   * @return int|null
   */
  public function getTotalResults()
  {
    return $this->total_results;
  }

  /**
   * Sets total_results.
   *
   * @param int|null $total_results Amount of overall projects of this query not limited by limit or offset
   *
   * @return $this
   */
  public function setTotalResults(int $total_results = null)
  {
    $this->total_results = $total_results;

    return $this;
  }
}
