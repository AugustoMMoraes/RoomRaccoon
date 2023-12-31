<style>
    .alert {
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }
</style>

<?php if (isset($message) && is_array($message)) : ?>
    <div class="alert <?php echo $message['error'] ? 'alert-danger' : 'alert-success'; ?>">
        <?php echo $message['message']; ?>
    </div>
<?php endif; ?>