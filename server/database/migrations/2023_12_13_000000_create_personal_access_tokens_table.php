CREATE TABLE `personal_access_tokens` (
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `tokenable_type` VARCHAR(255) NOT NULL,
    `tokenable_id` BIGINT UNSIGNED NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `token` VARCHAR(64) NOT NULL,
    `last_used_at` TIMESTAMP NULL,
    `expires_at` TIMESTAMP NULL,
    `updated_at` TIMESTAMP NULL,
    `created_at` TIMESTAMP NULL,
    PRIMARY KEY (`id`), UNIQUE `personal_access_tokens_token_unique`(`token`), INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`,`tokenable_id`)
) ENGINE = InnoDB;
