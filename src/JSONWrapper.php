<?php
    namespace AndrewApeIT\JSON;

    class JSONWrapper {
        public static function Decode(string $json, ?bool $associative = null, int $depth = 512, int $flags = 0) {
            $returned = json_decode($json, $associative, $depth, $flags);

            if ($returned === null) {
                throw new Exception('Failed to decode JSON');
            }

            return $returned;
        }

        public static function Encode(mixed $value , int $flags = 0 , int $depth = 512) {
            $returned = json_encode($value, $flags, $depth);

            if ($returned === false) {
                throw new Exception('Failed to encode JSON');
            }

            return $returned;
        }
    }
?>
