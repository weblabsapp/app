class ValidationError {
    constructor(message, errors) {
        this.message = message;
        this.name = "ValidationError";
        this.errors = errors;
    }
}

module.exports = ValidationError;