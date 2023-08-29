<?php

namespace App\Actions;

use Weaviate\Weaviate;

class SearchWeaviateAction
{
    public function execute(string $weaviateClass, string $question, string $category = null): array
    {
        $weaviate = new Weaviate(config('weaviate.host') . '/v1', '', ['X-OpenAI-Api-Key' => env('OPENAI_API_KEY')]);

        /**
         * Limit: The amount of records considered. Will generate groups based on the records nside the limit.
         * nearText.distance: max dissimularity between the tags and the search tags.
         * autocut: max "jump" in dissimularity between the tags and the search tags.
         */

        $response = $weaviate->graphql()->get('{
            Get {
                ' . $weaviateClass . '(
                    limit: 10,
                    ' . 
                    // 'where: {
                    //     path: ["category"],
                    //     operator: Equal,
                    //     valueText: "' . $category . '"
                    // },' . 
                    'nearText: {
                        concepts: ["' . $question . '"]
                        distance: 0.30
                    },
                ) {
                    ref_nr
                    name
                    sub_title
                    category
                    variant
                    '. 
                    // 'features' .
                    '
                    description
                    price
                    dn
                    pn
                    connection
                    material
                    closing_direction
                    notes
                    _additional {
                        distance
                    }
                }
            }
        }');

        $data = $response['data']['Get'][$weaviateClass];

        return $data;
    }

}
