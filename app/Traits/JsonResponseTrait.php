<?php
namespace App\Traits;

use Illuminate\Support\Arr;

trait JsonResponseTrait
{
    /**
     * Parse JSON response based from the given parameter
     *
     * @param array $response
     * @return \Illuminate\Http\JsonResponse
     * 
     * @author Ezekiel Reginio <ezekiel@1export.com>
     */
    public function parseJsonResponse(array $response, string $wrapper = null)
    {
        if ($wrapper !== null) {
			$data[$wrapper] = Arr::get($response, 'data', []);
		} else {
			$data = Arr::get($response, 'data', []);
		}
        
        //Optional Response Error Code
        if (Arr::get($response, 'error_code') !== null) {
			$data['error_code'] = $response['error_code'];
		}

        return $this->getJsonResponse(
			$data,
			Arr::get($response, 'message', 'Success'),
			Arr::get($response, 'code', 200)
		);
    }

    /**
     * Returns a JSON response based from the given parameters
     *
     * @param array|null $responseData
     * @param string|null $message
     * @param integer $code
     * @return \Illuminate\Http\JsonResponse
     * 
     * @author Ezekiel Reginio <ezekiel@1export.com>
     */
    public function getJsonResponse(?array $responseData = [], ?string $message = 'Success', int $code = 200)
    {
        $success = $this->isSuccess($code);

		return response()->json(array_merge($responseData, [
			'success'   => $success,
			'message'	=> $message
		]), $code);
    }

    /**
	 * Check if the code is success.
	 *
	 * @param integer $code
	 * @return boolean
     * 
     * @author Ezekiel Reginio <ezekiel@1export.com>
	 */
	public function isSuccess(int $code) {
		return in_array($code, [200, 201]);
	}
}