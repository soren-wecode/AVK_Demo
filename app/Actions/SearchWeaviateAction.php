<?php

namespace App\Actions;

use Weaviate\Weaviate;

class SearchWeaviateAction
{
    public function execute(string $weaviateClass, string $question, string $category): array
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
                    where: {
                        path: ["category"],
                        operator: Equal,
                        valueText: "' . $category . '"
                    },
                    nearText: {
                        concepts: ["' . $question . '"]
                        distance: 0.20
                    },
                ) {
                    pdf_filename
                    pdf_title
                    section_title
                    category
                    text
                }
            }
        }');

        // dd($response);
        $data = $response['data']['Get'][$weaviateClass];

        return $data;
    }

}
