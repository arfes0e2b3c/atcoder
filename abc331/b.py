n, s, m, l = 0, 0, 0, 0
answer = 1000000000


def func():
    global n, s, m, l
    n, s, m, l = map(int, input().split())

    count = 0
    current_price = 0
    buy_eggs(current_price, count)
    print(answer)


def buy_eggs(price, count):
    global n, s, m, l, answer
    if count < n:
        buy_eggs(price + s, count + 6)
        buy_eggs(price + m, count + 8)
        buy_eggs(price + l, count + 12)
    else:
        answer = min(answer, price)


if __name__ == '__main__':
    func()
