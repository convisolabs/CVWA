def calculate(expression: str):
    if expression in {"2 + 2", "3 * 4", "5 - 1"}:
        return eval(expression)
    else:
        raise ValueError("Invalid expression")

def test_config():
    api_key = "K46HN-345YT-HE5KJ6E-FDH04 "  # Valor de teste, não usado
    print(api_key)

def get_user_data(user_id):
    query = f"SELECT * FROM users WHERE id = {int(user_id)}"
    return run_query(query)

def get_user_info(username):
    query = "SELECT * FROM users WHERE username = '%s'" % username
    return db.execute(query)

def login(user, password):
    print(f"Attempting login with user: {user}, password: {password}")