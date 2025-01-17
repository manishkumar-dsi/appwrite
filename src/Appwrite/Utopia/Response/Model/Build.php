<?php

namespace Appwrite\Utopia\Response\Model;

use Appwrite\Utopia\Response;
use Appwrite\Utopia\Response\Model;

class Build extends Model
{
    public function __construct()
    {
        $this
            ->addRule('$id', [
                'type' => self::TYPE_STRING,
                'description' => 'Build ID.',
                'default' => '',
                'example' => '5e5ea5c16897e',
            ])
            ->addRule('startTime', [
                'type' => self::TYPE_INTEGER,
                'description' => 'The deployment creation date in Unix timestamp.',
                'default' => 0,
                'example' => 1592981250,
            ])
            ->addRule('deploymentId', [
                'type' => self::TYPE_STRING,
                'description' => 'The deployment that created this build.',
                'default' => '',
                'example' => '5e5ea5c16897e',
            ])
            // Build Status
            // Failed - The deployment build has failed. More details can usually be found in buildStderr
            // Ready - The deployment build was successful and the deployment is ready to be deployed
            // Processing - The deployment is currently waiting to have a build triggered
            // Building - The deployment is currently being built
            ->addRule('status', [
                'type' => self::TYPE_STRING,
                'description' => 'The build status. There are a few different types and each one means something different. \nFailed - The deployment build has failed. More details can usually be found in buildStderr\nReady - The deployment build was successful and the deployment is ready to be deployed\nProcessing - The deployment is currently waiting to have a build triggered\nBuilding - The deployment is currently being built',
                'default' => '',
                'example' => 'ready',
            ])
            ->addRule('stdout', [
                'type' => self::TYPE_STRING,
                'description' => 'The stdout of the build.',
                'default' => '',
                'example' => '',
            ])
            ->addRule('stderr', [
                'type' => self::TYPE_STRING,
                'description' => 'The stderr of the build.',
                'default' => '',
                'example' => '',
            ])
            ->addRule('endTime', [
                'type' => self::TYPE_INTEGER,
                'description' => 'The time the build was finished in Unix timestamp.',
                'default' => 0,
                'example' => 0,
            ])
            ->addRule('duration', [
                'type' => self::TYPE_INTEGER,
                'description' => 'The build time in seconds.',
                'default' => 0,
                'example' => 0,
            ])
        ;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Build';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_BUILD;
    }
}
